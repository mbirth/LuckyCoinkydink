<?php

// 幸運な偶然 - Lucky Coinkydink
// See LICENSE file for license information.

namespace LuckyCoin\Database;

use LuckyCoin\Database\DbAbstract;
use Exception;

class MysqliDatabase extends DbAbstract
{
    /**
     * Tells the DB Layer to start a DB transaction.
     *
     * @access public
     */
    public function beginTransaction()
    {
        $this->query('start transaction');
    }

    /**
     * Tells the DB Layer to end a DB transaction.
     *
     * @access public
     * @param  boolean  If true, perform the query. If false, rollback.
     */
    public function endTransaction(bool $commit)
    {
        if ($commit) {
            $this->query('commit');
        } else {
            $this->query('rollback');
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
    public function inSql($col, &$search_ids, $type = ' OR ')
    {
        return $col . " IN (" . implode(', ', $search_ids) . ")";
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
     * @param   boolean     If true, the executed SQL error is known to fail, and should be disregarded (errors can be ignored on DUPLICATE INDEX queries and the likes)
     * @return  mixed       Returns the result of the SQL query, depending on the input parameters
     */
    public function &query($sql, $single = false, $result_type = "both", $reportErr = false, $assocKey = false, $assocVal = false, $expectError = false)
    {
        $type_map = array(
            'assoc' => MYSQLI_ASSOC,
            'num' => MYSQLI_NUM,
            'both' => MYSQLI_BOTH,
            'true' => true,
            'false' => false
        );

        if ($expectError) {
            $c = @mysqli_query($this->db_conn, $sql);
        } else {
            $c = mysqli_query($this->db_conn, $sql);
        }

        if (!$expectError && mysqli_error($this->db_conn) != '') {
            $msg = mysqli_error($this->db_conn);
            return $msg;
        }

        if (!$c) {
            if (!$expectError && !$this->serendipity['production']) {
                print mysqli_error($this->db_conn);
                if (function_exists('debug_backtrace') && $reportErr == true) {
                    highlight_string(var_export(debug_backtrace(), 1));
                }
            }

            return $type_map['false'];
        }

        if ($c === true) {
            return $type_map['true'];
        }

        $result_type = $type_map[$result_type];

        switch(mysqli_num_rows($c)) {
            case 0:
                if ($single) {
                    return $type_map['false'];
                }
                return $type_map['true'];
            case 1:
                if ($single) {
                    return mysqli_fetch_array($c, $result_type);
                }
            default:
                if ($single) {
                    return mysqli_fetch_array($c, $result_type);
                }

                $rows = array();
                while ($row = mysqli_fetch_array($c, $result_type)) {
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
                return $rows;
        }
    }

    /**
     * Returns the latest INSERT_ID of an SQL INSERT INTO command, for auto-increment columns
     *
     * @access public
     * @return int      Value of the auto-increment column
     */
    public function insertId($table = '', $id = '')
    {
        return mysqli_insert_id($this->db_conn);
    }

    /**
     * Returns the number of affected rows of a SQL query
     *
     * @access public
     * @return int      Number of affected rows
     */
    public function affectedRows()
    {
        return mysqli_affected_rows($this->db_conn);
    }

    /**
     * Returns the number of updated rows in a SQL query
     *
     * @access public
     * @return int  Number of updated rows
     */
    public function updatedRows()
    {
        preg_match(
            "/^[^0-9]+([0-9]+)[^0-9]+([0-9]+)[^0-9]+([0-9]+)/",
            mysqli_info($this->db_conn),
            $arr
        );
        // mysqli_affected_rows returns 0 if rows were matched but not changed.
        // mysqli_info returns rows matched
        return $arr[1];
    }

    /**
     * Returns the number of matched rows in a SQL query
     *
     * @access public
     * @return int  Number of matched rows
     */
    public function matchedRows()
    {
        preg_match(
            "/^[^0-9]+([0-9]+)[^0-9]+([0-9]+)[^0-9]+([0-9]+)/",
            mysqli_info($this->db_conn),
            $arr
        );
        // mysqli_affected_rows returns 0 if rows were matched but not changed.
        // mysqli_info returns rows matched
        return $arr[0];
    }

    /**
     * Returns an escaped string, so that it can be safely included in a SQL string encapsulated within quotes, without allowing SQL injection.
     */
    public function escapeString($string): string
    {
        return mysqli_escape_string($this->db_conn, $string);
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

        $function = 'mysqli_connect';

        $connparts = explode(':', $this->db_hostname);
        if (!empty($connparts[1])) {
            // A "hostname:port" connection was specified
            $this->db_conn = $function($connparts[0], $this->db_username, $this->db_password, $this->db_name, $connparts[1]);
        } else {
            // Connect with default ports
            $this->db_conn = $function($connparts[0], $this->db_username, $this->db_password);
        }
        mysqli_select_db($this->db_conn, $this->db_name);
        $this->reconnect();

        return $this->db_conn;
    }

    public function reconnect()
    {
        $use_charset = '';
        if (isset($this->serendipity['dbCharset']) && !empty($this->serendipity['dbCharset'])) {
            $use_charset = $this->serendipity['dbCharset'];
            if (!defined('SQL_CHARSET_INIT')) { define('SQL_CHARSET_INIT', true); }
        } elseif (defined('SQL_CHARSET') && $this->serendipity['dbNames'] && !defined('SQL_CHARSET_INIT')) {
            $use_charset = SQL_CHARSET;
        }

        if ($use_charset != '') {
            mysqli_set_charset($this->db_conn, $use_charset);
        }
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
        static $search  = array('{AUTOINCREMENT}', '{PRIMARY}',
            '{UNSIGNED}', '{FULLTEXT}', '{FULLTEXT_MYSQL}', '{BOOLEAN}', '{TEXT}');
        static $replace = array('int(11) not null auto_increment', 'primary key',
            'unsigned'  , 'FULLTEXT', 'FULLTEXT', 'enum (\'true\', \'false\') NOT NULL default \'true\'', 'LONGTEXT');

        $search[] = '{UTF_8}';
        if ($this->isUtf8mb4Ready()) {
            $replace[] = 'ROW_FORMAT=DYNAMIC /*!40100 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */';
        } else {
            # in old versions we stick to the three byte pseudo utf8 to not trip
            # over the max index restriction of 1000 bytes
            $replace[] = '/*!40100 CHARACTER SET utf8 COLLATE utf8_unicode_ci */';
        }

        if ($this->isUtf8mb4Ready()) {
            # InnoDB enables us to use utf8mb4 with the higher max index size
            $this->query("SET storage_engine=INNODB");
        } else {
            # Before 5.6.4/10.0.5 InnoDB did not support fulltext indexes, which we use,
            # thus we stay with MyISAM here
            $this->query("SET storage_engine=MYISAM");
        }

        $query = trim(str_replace($search, $replace, $query));
        if ($query[0] == '@') {
            // Errors are expected to happen (like duplicate index creation)
            return $this->query(substr($query, 1), false, 'both', false, false, false, true);
        } else {
            return $this->query($query);
        }
    }

    /**
     * Check if we think that it is safe to ugprade to utf8mb4. This checks version numbers and applied settings.
     * Depending on the version of mariadb/mysql we need to check either one or three settings. We check for
     * innodb being available with fulltext index and large index support, so that our database scheme can work
     *
     * @return boolean   Whether the database could support utf8mb4
     */
    public function isUtf8mb4Ready(): bool
    {
        $mysql_version = mysqli_get_server_info($this->db_conn);
        $maria = false;
        if (strpos($mysql_version, 'MariaDB') !== false) {
            $maria = true;
        }
        if ($maria) {
            # maria trips up our version detection scheme by prepending 5.5.5 to newer versions
            $mysql_version = str_replace('5.5.5-', '', $mysql_version);
        }

        if ($maria) {
            # see https://mariadb.com/kb/en/innodb-file-format/ for when barracuda is available, and when it's the only option
            # see https://docs.nextcloud.com/server/15/admin_manual/configuration_database/mysql_4byte_support.html for which
            # variables we have to check to assume utf8mb4 it can work (with the large indexes we need)

            if (version_compare($mysql_version, '10.3.1', '>=')) {
                # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_per_table
                $rows = $this->query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
                try {
                    return $rows[0][1] == 'ON';
                } catch (Exception $e) {
                    return false;
                }
            }

            # see https://mariadb.com/kb/en/full-text-index-overview/. We need 10.0.5 to have fulltext indexes with innodb
            if (version_compare($mysql_version, '10.0.5', '>=')) {
                # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_per_table
                $rows = $this->query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
                try {
                    if ($rows[0][1] != 'ON') {
                        return false;
                    }
                } catch (Exception $e) {
                    return false;
                }

                # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_format
                $rows = $this->query("SHOW VARIABLES LIKE 'innodb_file_format'");
                try {
                    if ($rows[0][1] != 'barracuda') {
                        return false;
                    }
                } catch (Exception $e) {
                    return false;
                }

                # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_large_prefix
                $rows = $this->query("SHOW VARIABLES LIKE 'innodb_large_prefix'");
                try {
                    if ($rows[0][1] != 'ON') {
                        return false;
                    }
                } catch (Exception $e) {
                    return false;
                }
            }
            return false;   # version too old
        }

        # now we know it is not mariadb, but "real" mysql

        # These versions might need to be changed based on testing feedback
        if (version_compare($mysql_version, '8.0.0', '>=')) {
            $rows = $this->query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
            try {
                return $rows[0][1] == 'ON';
            } catch (Exception $e) {
                return false;
            }
        }

        # see https://dev.mysql.com/doc/refman/5.6/en/innodb-fulltext-index.html. We need 5.6 for fulltext indexes
        if (version_compare($mysql_version, '5.6', '>=')) {
            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_per_table
            $rows = $this->query("SHOW VARIABLES LIKE 'innodb_file_per_table'");
            try {
                if ($rows[0][1] != 'ON') {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }

            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_file_format
            $rows = $this->query("SHOW VARIABLES LIKE 'innodb_file_format'");
            try {
                if ($rows[0][1] != 'barracuda') {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }

            # see https://mariadb.com/kb/en/innodb-system-variables/#innodb_large_prefix
            $rows = $this->query("SHOW VARIABLES LIKE 'innodb_large_prefix'");
            try {
                if ($rows[0][1] != 'ON') {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }
            return true;
        }

        return false;    # version too old
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
        if (!function_exists('mysqli_connect')) {
            $errs[] = 'No mySQLi extension found. Please check your webserver installation or contact your systems administrator regarding this problem.';
            return false;
        }

        $function = 'mysqli_connect';
        $connparts = explode(':', $hash['dbHost']);
        if (!empty($connparts[1])) {
            // A "hostname:port" connection was specified
            $c = @$function($connparts[0], $hash['dbUser'], $hash['dbPass'], $hash['dbName'], $connparts[1]);
        } else {
            // Connect with default ports
            $c = @$function($connparts[0], $hash['dbUser'], $hash['dbPass']);
        }

        if (!$c) {
            $errs[] = 'Could not connect to database; check your settings.';
            $errs[] = 'The mySQL error was: ' . serendipity_specialchars(mysqli_connect_error());
            return false;
        }

        $this->db_conn = $c;

        if ( !@mysqli_select_db($c, $hash['dbName']) ) {
            $errs[] = 'The database you specified does not exist.';
            $errs[] = 'The mySQL error was: ' . serendipity_specialchars(mysqli_error($c));
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
