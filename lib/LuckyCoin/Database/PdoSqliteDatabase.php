<?php

// 幸運な偶然 - Lucky Coinkydink
// See LICENSE file for license information.

namespace LuckyCoin\Database;

use LuckyCoin\Database\DbAbstract;
use PDO;

class PdoSqliteDatabase extends DbAbstract
{
    /**
     * Connect to the configured Database
     *
     * @access public
     * @return  resource   connection handle
     */
    public function connect()
    {
        $this->db_conn = new PDO(
            'sqlite:' . (defined('S9Y_DATA_PATH') ? S9Y_DATA_PATH : $this->serendipity['serendipityPath']) . $this->db_name . '.db'
        );

        return $this->db_conn;
    }

    // TODO: Replace with proper Logging object
    public function logmsg($msgstr)
    {
        $fp = @fopen('sqlite.log', 'a');
        fwrite($fp, '[' . date('d.m.Y H:i') . '] ' . $msgstr . "\n\n");
        fclose($fp);
    }

    /**
     * Parse result arrays into expected format for further operations
     *
     * SQLite does not support to return "e.entryid" within a $row['entryid'] return.
     * So this function manually iterate through all result rows and rewrites 'X.yyyy' to 'yyyy'.
     * Yeah. This sucks. Don't tell me!
     *
     * @access private
     * @param  resource    The row resource handle
     * @param  int          Bitmask to tell whether to fetch numerical/associative arrays
     * @return array        Propper array containing the resource results
     */
    protected function fetchArray($row, $type = PDO::FETCH_ASSOC)
    {
        static $search  = array('%00',  '%25');
        static $replace = array("\x00", '%');

        if (!is_array($row)) {
            return $row;
        }

        /* strip any slashes, correct fieldname */
        $newrow = array();
        foreach ($row as $i => $v) {
            // TODO: If a query of the format 'SELECT a.id, b.text FROM table' is used,
            //       the sqlite extension will give us key indizes 'a.id' and 'b.text'
            //       instead of just 'id' and 'text' like in mysql/postgresql extension.
            //       To fix that, we use a preg-regex; but that is quite performance costy.
            //       Either we always need to use 'SELECT a.id AS id, b.text AS text' in query,
            //       or the sqlite extension may get fixed. :-)
            $newrow[preg_replace('@^.+\.(.*)@', '\1', $i)] = str_replace($search, $replace, $v);
        }

        return $newrow;
    }

    /**
     * Tells the DB Layer to start a DB transaction.
     *
     * @access public
     */
    public function beginTransaction(){
        $this->db_conn->beginTransaction();
    }

    /**
     * Tells the DB Layer to end a DB transaction.
     *
     * @access public
     * @param  boolean  If true, perform the query. If false, rollback.
     */
    public function endTransaction(bool $commit)
    {
        if ($commit){
            $this->db_conn->commit();
        } else {
            $this->db_conn->rollback();
        }
    }

    /**
     * Assemble and return SQL condition for a "IN (...)" clause
     *
     * @access public
     * @param  string   table column name
     * @param  array    referenced array of values to search for in the "IN (...)" clause
     * @param  string   condition of how to associate the different input values of the $search_ids parameter
     * @return string   resulting SQL string
     */
    public function inSql($col, &$searchIds, $type = ' OR ')
    {
        $sql = array();
        if (!is_array($searchIds)) {
            return false;
        }

        foreach ($searchIds as $id) {
            $sql[] = $col . ' = ' . $id;
        }

        $cond = '(' . implode($type, $sql) . ')';
        return $cond;
    }

    /**
     * Returns an escaped string, so that it can be safely included in a SQL string encapsulated within quotes, without allowing SQL injection.
     */
    public function escapeString($string): string
    {
        return substr($this->db_conn->quote($string), 1, -1);
    }

    /**
     * Returns the option to a LIMIT SQL statement, because it varies across DB systems
     *
     * @access public
     * @param  int      Number of the first row to return data from
     * @param  int      Number of rows to return
     * @return string   SQL string to pass to a LIMIT statement
     */
    public function limit($start, $offset)
    {
        return $start . ', ' . $offset;
    }

    /**
     * Return a LIMIT SQL option to the DB Layer as a full LIMIT statement
     *
     * @access public
     * @param   SQL string of a LIMIT option
     * @return  SQL string containing a full LIMIT statement
     */
    public function limitSql($limitstring)
    {
        return ' LIMIT ' . $limitstring;
    }

    /**
     * Returns the number of affected rows of a SQL query
     *
     * @access public
     * @return int      Number of affected rows
     */
    public function affectedRows()
    {
        // FIXME: Cache statement handler in this class?
        return $this->serendipity['dbSth']->rowCount();
    }

    /**
     * Returns the number of updated rows in a SQL query
     *
     * @access public
     * @return int  Number of updated rows
     */
    public function updatedRows()
    {
        // it is unknown whether pg_affected_rows returns number of rows
        //  UPDATED or MATCHED on an UPDATE statement.
        // FIXME: Cache statement handler in this class?
        return $this->serendipity['dbSth']->rowCount();
    }

    /**
     * Returns the number of matched rows in a SQL query
     *
     * @access public
     * @return int  Number of matched rows
     */
    public function matchedRows()
    {
        // it is unknown whether pg_affected_rows returns number of rows
        //  UPDATED or MATCHED on an UPDATE statement.
        // FIXME: Cache statement handler in this class?
        return $this->serendipity['dbSth']->rowCount();
    }

    /**
     * Returns the latest INSERT_ID of an SQL INSERT INTO command, for auto-increment columns
     *
     * @access public
     * @param  string   Name of the table to get a INSERT ID for
     * @param  string   Name of the column to get a INSERT ID for
     * @return int      Value of the auto-increment column
     */
    public function insertId($table = '', $id = '')
    {
        return $this->db_conn->lastInsertId();
    }

    /**
     * Perform a DB Layer SQL query.
     *
     * This function returns values dependin on the input parameters and the result of the query.
     * It can return:
     *   false or a string if there was an error (depends on $expectError),
     *   true if the query succeeded but did not generate any rows
     *   array of field values if it returned a single row and $single is true
     *   array of array of field values if it returned row(s) [stacked array]
     *
     * @access public
     * @param   string      SQL query to execute
     * @param   boolean     Toggle whether the expected result is a single row (TRUE) or multiple rows (FALSE). This affects whether the returned array is 1 or 2 dimensional!
     * @param   string      Result type of the array indexing. Can be one of "assoc" (associative), "num" (numerical), "both" (numerical and associative, default)
     * @param   boolean     If true, errors will be reported. If false, errors will be ignored.
     * @param   string      A possible array key name, so that you can control the multi-dimensional mapping of an array by the key column
     * @param   string      A possible array field name, so that you can control the multi-dimensional mapping of an array by the key column and the field value.
     * @param   boolean     If true, the executed SQL error is known to fail, and should be disregarded (errors can be ignroed on DUPLICATE INDEX queries and the likes)
     * @return  mixed       Returns the result of the SQL query, depending on the input parameters
     */
    public function &query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false)
    {
        $type_map = array(
            'assoc' => PDO::FETCH_ASSOC,
            'num'   => PDO::FETCH_NUM,
            'both'  => PDO::FETCH_BOTH,
            'true'  => true,
            'false' => false
        );

        //serendipity_db_logmsg('SQLQUERY: ' . $sql);
        if (!$expectError && ($reportErr || !$this->serendipity['production'])) {
            $this->serendipity['dbSth'] = $this->db_conn->prepare($sql);
        } else {
            $this->serendipity['dbSth'] = $this->db_conn->prepare($sql);
        }

        if (!$this->serendipity['dbSth']) {
            if (!$expectError && !$this->serendipity['production']) {
                print "<span class='msg_error'>Error in $sql</span>";
                print $this->db_conn->errorInfo() . "<BR/>\n";
                if (function_exists('debug_backtrace')) {
                    highlight_string(var_export(debug_backtrace(), 1));
                }
                print "<pre>$sql</pre>";
            }
            return $type_map['false'];
        }

        $this->serendipity['dbSth']->execute();

        if ($this->serendipity['dbSth'] === true) {
            return $type_map['true'];
        }

        $result_type = $type_map[$result_type];

        $rows = array();

        foreach ($this->serendipity['dbSth']->fetchAll($result_type) as $row) {
            $row = $this->fetchArray($row, $result_type);
            if (!empty($assocKey)) {
                // You can fetch a key-associated array via the two function parameters assocKey and assocVal
                if (empty($assocVal)) {
                    $rows[$row[$assocKey]] = $row;
                } else {
                    $rows[$row[$assocKey]] = $row[$assocVal];
                }
            } else {
                $rows[] = $row;
            }
        }
        //$this->logmsg('SQLRESULT: ' . print_r($rows,true));

        if (count($rows) == 0) {
            if ($single) {
                return $type_map['false'];
            }
            return $type_map['true'];
        }
        if (count($rows) == 1 && $single) {
            return $rows[0];
        }
        return $rows;
    }

    /**
     * Prepares a Serendipity query input to fully valid SQL. Replaces certain "template" variables.
     *
     * @access public
     * @param  string   SQL query with template variables to convert
     * @return resource    SQL resource handle of the executed query
     */
    public function schemaImport($query)
    {
        static $search  = array('{AUTOINCREMENT}', '{PRIMARY}', '{UNSIGNED}', '{FULLTEXT}', '{BOOLEAN}', '{UTF_8}', '{TEXT}');
        static $replace = array('INTEGER AUTOINCREMENT', 'PRIMARY KEY', '', '', 'BOOLEAN NOT NULL', '', 'LONGTEXT');

        if (stristr($query, '{FULLTEXT_MYSQL}')) {
            return true;
        }

        $query = trim(str_replace($search, $replace, $query));
        $query = str_replace('INTEGER AUTOINCREMENT PRIMARY KEY', 'INTEGER PRIMARY KEY AUTOINCREMENT', $query);
        if ($query[0] == '@') {
            // Errors are expected to happen (like duplicate index creation)
            return $this->query(substr($query, 1), false, 'both', false, false, false, true);
        } else {
            return $this->query($query);
        }
    }

    /**
     * Try to connect to the configured Database (during installation)
     *
     * @access public
     * @param  array     input configuration array, holding the connection info
     * @param  array     referenced array which holds the errors that might be encountered
     * @return boolean   return true on success, false on error
     */
    public function probe($hash, &$errs)
    {
        if (!in_array('sqlite', PDO::getAvailableDrivers())) {
            $errs[] = 'PDO_SQLITE driver not available';
            return false;
        }

        $dbName = (isset($hash['sqlitedbName']) ? $hash['sqlitedbName'] : $hash['dbName']);
        if (defined('S9Y_DATA_PATH')) {
            // Shared installations!
            $dbfile = S9Y_DATA_PATH . $dbName . '.db';
        } else {
            $dbfile = $this->serendipity['serendipityPath'] . $dbName . '.db';
        }

        $this->db_conn = new PDO(
            'sqlite:' . $dbfile
        );

        if (!$this->db_conn) {
            $errs[] = "Unable to open \"$dbfile\" - check permissions (directory needs to be writeable for webserver)!";
            return false;
        }

        return true;
    }

    /**
     * Returns the SQL code used for concatenating strings
     *
     * @access public
     * @param  string   Input string/column to concatenate
     * @return string   SQL parameter
     */
    public function concat($string)
    {
        return 'concat(' . $string . ')';
    }
}
