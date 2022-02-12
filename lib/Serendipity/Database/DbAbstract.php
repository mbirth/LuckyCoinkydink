<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity\Database;

abstract class DbAbstract
{
    protected $serendipity;
    protected $db_conn;
    protected $db_hostname;
    protected $db_username;
    protected $db_password;
    protected $db_name;
    protected $db_prefix;
    protected $db_type;

    public function __construct(&$serendipity)
    {
        $this->serendipity =& $serendipity;
        $this->db_type = $serendipity['dbType'];
        $this->db_hostname = $serendipity['dbHost'];
        $this->db_username = $serendipity['dbUser'];
        $this->db_password = $serendipity['dbPass'];
        $this->db_name = $serendipity['dbName'];
        $this->db_prefix = $serendipity['dbPrefix'];
    }

    public function connect()
    {
    }

    public function reconnect()
    {
    }

    public function beginTransaction()
    {
    }

    public function endTransaction(bool $commit)
    {
    }

    /**
     * Returns an escaped string, so that it can be safely included in a SQL string encapsulated within quotes, without allowing SQL injection.
     *
     * @access  public
     * @param   string   input string
     * @return  string   output string
     */
    public function escapeString($string)
    {
        return $string;
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
    }

    /**
     * Returns the number of affected rows of a SQL query
     *
     * @access public
     * @return int      Number of affected rows
     */
    public function affectedRows()
    {
    }

    /**
     * Returns the number of updated rows in a SQL query
     *
     * @access public
     * @return int  Number of updated rows
     */
    public function updatedRows()
    {
    }

    /**
     * Returns the number of matched rows in a SQL query
     *
     * @access public
     * @return int  Number of matched rows
     */
    public function matchedRows()
    {
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
    }

    /**
     * Perform a query to update the data of a certain table row
     *
     * You can pass the tablename and an array of keys to select the row,
     * and an array of values to UPDATE in the DB table.
     *
     * @access public
     * @param  string   Name of the DB table
     * @param  array    Input array that controls the "WHERE" condition part. Pass it an associative array like array('key1' => 'value1', 'key2' => 'value2') to get a statement like "WHERE key1 = value1 AND key2 = value2". Escaping is done automatically in this function.
     * @param  array    Input array that controls the "SET" condition part. Pass it an associative array like array('key1' => 'value1', 'key2' => 'value2') to get a statement like "SET key1 = value1, key2 = value2". Escaping is done automatically in this function.
     * @param  string   What do do with the SQL query (execute, display)
     * @return array    Returns the result of the SQL query
     */
    public function update($table, $keys, $values, $action = 'execute')
    {
        $set = '';

        foreach ($values as $k => $v) {
            if (strlen($set)) {
                $set .= ', ';
            }
            $set .= $k . '=\'' . $this->escapeString($v) . '\'';
        }

        $where = '';
        foreach ($keys as $k => $v) {
            if (strlen($where)) {
                $where .= ' AND ';
            }
            $where .= $k . '=\'' . $this->escapeString($v) . '\'';
        }

        if (strlen($where)) {
            $where = " WHERE $where";
        }

        $q = "UPDATE {$this->db_prefix}$table SET $set $where";
        if ($action == 'execute') {
            return $this->query($q);
        } else {
            return $q;
        }
    }

    /**
     * Perform a DB Layer SQL query.
     *
     * This function returns values depending on the input parameters and the result of the query.
     * It can return:
     *   false or a string if there was an error (depends on $expectError),
     *   true if the query succeeded but did not generate any rows
     *   array of field values if it returned a single row and $single is true
     *   array of array of field values if it returned row(s) [stacked array]
     *
     * @access public
     * @param   string      SQL query to execute
     * @param   bool     Toggle whether the expected result is a single row (TRUE) or multiple rows (FALSE). This affects whether the returned array is 1 or 2 dimensional!
     * @param   string      Result type of the array indexing. Can be one of "assoc" (associative), "num" (numerical), "both" (numerical and associative, default)
     * @param   bool     If true, errors will be reported. If false, errors will be ignored.
     * @param   string      A possible array key name, so that you can control the multi-dimensional mapping of an array by the key column
     * @param   string      A possible array field name, so that you can control the multi-dimensional mapping of an array by the key column and the field value.
     * @param   bool     If true, the executed SQL error is known to fail, and should be disregarded (errors can be ignored on DUPLICATE INDEX queries and the likes)
     * @return  mixed       Returns the result of the SQL query, depending on the input parameters
     */
    public function &query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false)
    {
    }

    /**
     * Perform a query to insert an associative array into a specific SQL table
     *
     * You can pass a tablename and an array of input data to insert into an array.
     *
     * @access  public
     * @param   string      Name of the SQL table
     * @param   array       Associative array of keys/values to insert into the table. Escaping is done automatically.
     * @param  string   What do do with the SQL query (execute, display)
     * @return array    Returns the result of the SQL query
     */
    public function insert($table, $values, $action = 'execute')
    {
        $names = implode(',', array_keys($values));

        $vals = '';
        foreach ($values as $k => $v) {
            if (strlen($vals)) {
                $vals .= ', ';
            }
            $vals .= '\'' . $this->escapeString($v) . '\'';
        }

        $q = "INSERT INTO {$this->db_prefix}$table ($names) values ($vals)";

        if ($action == 'execute') {
            return $this->query($q);
        } else {
            return $q;
        }
    }

    /**
     * Check whether an input value corresponds to a TRUE/FALSE option in the SQL database.
     *
     * Because older DBs could not store TRUE/FALSE values to be restored into a PHP variable,
     * this function tries to detect what the return code of a SQL column is, and convert it
     * to a PHP native boolean.
     *
     * Values that will be recognized as TRUE are 'true', 't' and '1'.
     *
     * @access public
     * @param  string   input value to compare
     * @return boolean  boolean conversion of the input value
     */
    public function bool($val)
    {
        if (($val === true) || ($val == 'true') || ($val == 't') || ($val == '1')) {
            return true;
        }
        #elseif (($val === false || $val == 'false' || $val == 'f'))
        return false;
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
    }

    /**
     * Return a SQL statement for a time interval or timestamp, specific to certain SQL backends
     *
     * @access public
     * @param   string  Indicate whether to return a timestamp, or an Interval
     * @param   int     The interval one might want to use, if Interval return was selected
     * @return  string  SQL statement
     */
    public function getInterval($val, $ival = 900)
    {
        switch ($this->db_type) {
            case 'sqlite':
            case 'sqlite3':
            case 'sqlite3oo':
            case 'pdo-sqlite':
                $interval = $ival;
                $ts = time();
                break;

            case 'pdo-postgres':
            case 'postgres':
                $interval = "interval '$ival'";
                $ts       = 'NOW()';
                break;

            case 'mysql':
            case 'mysqli':
            default:
                $interval = $ival;
                $ts       = 'NOW()';
                break;
        }

        switch ($val) {
            case 'interval':
                return $interval;

            default:
            case 'ts':
                return $ts;
        }
    }

    /**
     * Operates on an array to prepare it for SQL usage.
     *
     * @access public
     * @param   string Concatenation character
     * @param   array  Input array
     * @param   string How to convert (int: Only numbers, string: serendipity_db_escape_String)
     * @return  string Imploded string
     */
    public function implode($string, &$array, $type = 'int')
    {
        $new_array = array();
        if (!is_array($array)) {
            return '';
        }

        foreach ($array as $idx => $key) {
            if ($type == 'int') {
                $new_array[$idx] = (int)$key;
            } else {
                $new_array[$idx] = $this->escapeString($key);
            }
        }

        $string = implode($string, $new_array);
        return $string;
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
    }
}
