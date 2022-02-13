<?php

// Serendipity
// See LICENSE file for license information.

namespace Serendipity\Database;

use Exception;

class DbFactory
{
    private static $db_instance = null;

    public static function createFromConfig(&$serendipity): \Serendipity\Database\DbAbstract
    {
        if (self::$db_instance !== null) {
            // Already instantiated - return it
            return self::$db_instance;
        }

        $config2class = [
            'mysql'        => 'Mysqli',
            'mysqli'       => 'Mysqli',
            'pdo-postgres' => 'PdoPostgres',
            'pdo-sqlite'   => 'PdoSqlite',
            'postgres'     => 'Postgres',
            'sqlite'       => 'Sqlite',
            'sqlite3'      => 'Sqlite3',
            'sqlite3oo'    => 'Sqlite3oo',
            'sqlrelay'     => 'SqlRelay',
        ];

        if (!array_key_exists($serendipity['dbType'], $config2class)) {
            throw new Exception('Database type "' . $serendipity['dbType'] . '" not supported!');
        }

        // Name of database class
        $dbClass = '\\Serendipity\\Database\\' . $config2class[$serendipity['dbType']] . 'Database';

        self::$db_instance = new $dbClass($serendipity);
        return self::$db_instance;
    }
}
