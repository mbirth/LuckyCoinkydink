<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity\Database;

class DbTools
{
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
    public static function bool($val)
    {
        if (($val === true) || ($val == 'true') || ($val == 't') || ($val == '1')) {
            return true;
        }
        #elseif (($val === false || $val == 'false' || $val == 'f'))
        return false;
    }
}
