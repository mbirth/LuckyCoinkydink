<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity\Database;

use Serendipity\Database\Sqlite3Database;

class Sqlite3ooDatabase extends Sqlite3Database
{
    /**
     * Connect to the configured Database
     *
     * @access public
     * @return  resource   connection handle
     */
    public function connect()
    {
        if (isset($this->db_conn)) {
            return $this->db_conn;
        }

        // SQLite3 doesn't support persistent connections
        $this->db_conn = new SQLite3((defined('S9Y_DATA_PATH') ? S9Y_DATA_PATH : $this->serendipity['serendipityPath']) . $this->db_name . '.db');

        return $this->db_conn;
    }

    /**
     * Returns the number of affected rows of a SQL query
     *
     * @access public
     * @return int      Number of affected rows
     */
    public function affectedRows()
    {
        return $this->db_conn->changes();
    }

    /**
     * Returns the latest INSERT_ID of an SQL INSERT INTO command, for auto-increment columns
     *
     * @access public
     * @return int      Value of the auto-increment column
     */
    public function insertId()
    {
        return $this->db_conn->lastInsertRowID();
    }

    /**
     * Parse result arrays into expected format for further operations
     *
     * SQLite does not support to return "e.entryid" within a $row['entryid'] return.
     * So this function manually iteratse through all result rows and rewrites 'X.yyyy' to 'yyyy'.
     * Yeah. This sucks. Don't tell me!
     *
     * @access private
     * @param  resource    The row resource handle
     * @param  int          Bitmask to tell whether to fetch numerical/associative arrays
     * @return array        Propper array containing the resource results
     */
    public function fetchArray($res, $type = self::SQLITE3_BOTH)
    {
        static $search  = array('%00',  '%25');
        static $replace = array("\x00", '%');

        try {
            $row = $res->fetchArray();
        } catch (Exception $e) {
            $row = false;
            echo "SQLITE-EXCEPTION: " . $e->getMessage() . "\n";
        }

        if (!is_array($row)) {
            return $row;
        }

        /* strip any slashes, correct fieldname */
        foreach ($row as $i => $v) {
            // TODO: If a query of the format 'SELECT a.id, b.text FROM table' is used,
            //       the sqlite extension will give us key indizes 'a.id' and 'b.text'
            //       instead of just 'id' and 'text' like in mysql/postgresql extension.
            //       To fix that, we use a preg-regex; but that is quite performance costy.
            //       Either we always need to use 'SELECT a.id AS id, b.text AS text' in query,
            //       or the sqlite extension may get fixed. :-)
            $row[preg_replace('@^.+\.(.*)@', '\1', $i)] = str_replace($search, $replace, $v);
        }

        if ($type == self::SQLITE3_NUM) {
            $frow = array();
        } else {
            $frow = $row;
        }

        if ($type != self::SQLITE3_ASSOC) {
            $i = 0;
            foreach ($row as $k => $v) {
                $frow[$i] = $v;
                $i++;
            }
        }

        return $frow;
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
    public function &query($sql, $single = false, $result_type = "both", $reportErr = true, $assocKey = false, $assocVal = false, $expectError = false)
    {
        $type_map = array(
            'assoc' => self::SQLITE3_ASSOC,
            'num'   => self::SQLITE3_NUM,
            'both'  => self::SQLITE3_BOTH,
            'true'  => true,
            'false' => false
        );

        static $debug = false;

        if ($debug) {
            // Open file and write directly. In case of crashes, the pointer needs to be killed.
            $fp = @fopen('sqlite.log', 'a');
            fwrite($fp, '[' . date('d.m.Y H:i') . '] SQLITE QUERY: ' . $sql . "\n\n");
            fclose($fp);
        }

        if ($reportErr && !$expectError) {
            $res = $this->db_conn->query($sql);
        } else {
            $res = @$this->db_conn->query($sql);
        }

        if (!$res) {
            if (!$expectError && !$this->serendipity['production']) {
                var_dump($res);
                var_dump($sql);
                $msg = "problem with query";
                return $msg;
            }
            if ($debug) {
                $fp = @fopen('sqlite.log', 'a');
                fwrite($fp, '[' . date('d.m.Y H:i') . '] [ERROR] ' . "\n\n");
                fclose($fp);
            }

            return $type_map['false'];
        }

        if (!preg_match('@^SELECT@imsU', trim($sql))) {
            // Everything that is not SELECT will not return rows.
            // SQLite3 OO will always return an object though.
            if ($this->db_conn->lastErrorCode() > 0) {
                echo "SQLITE-ERROR: " . $this->db_conn->lastErrorMsg() . "<br />\n";
                return $type_map['false'];
            } else {
                return $type_map['true'];
            }
        }

        $rows = array();

        while (($row = $this->fetchArray($res, $type_map[$result_type]))) {
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

        if ($debug) {
            $fp = @fopen('sqlite.log', 'a');
            fwrite($fp, '[' . date('d.m.Y H:i') . '] SQLITE RESULT: ' . print_r($rows, true). "\n\n");
            fclose($fp);
        }

        if ($single && count($rows) == 1) {
            return $rows[0];
        }

        if (count($rows) == 0) {
            if ($single) {
                return $type_map['false'];
            }
            return $type_map['true'];
        }

        return $rows;
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
        $dbName = (isset($hash['sqlitedbName']) ? $hash['sqlitedbName'] : $hash['dbName']);

        if (!class_exists('SQLite3')) {
            $errs[] = 'SQLite extension not installed. Available on PHP 5.4+.';
            return false;
        }

        if (defined('S9Y_DATA_PATH')) {
            // Shared installations!
            $dbfile = S9Y_DATA_PATH . $dbName . '.db';
        } else {
            $dbfile = $this->serendipity['serendipityPath'] . $dbName . '.db';
        }

        $this->db_conn = new SQLite3($dbfile);

        if ($this->db_conn) {
            return true;
        }

        $errs[] = "Unable to open \"$dbfile\" - check permissions (directory needs to be writeable for webserver)!";
        return false;
    }
}
