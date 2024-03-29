<?php

// 幸運な偶然 - Lucky Coinkydink
// See LICENSE file for license information.

namespace LuckyCoin\Database;

use Exception;

class DbFactory
{
    private static $db_instance = null;

    public static function createFromConfig(&$serendipity): \LuckyCoin\Database\DbAbstract
    {
        if (self::$db_instance !== null) {
            // Already instantiated - return it
            return self::$db_instance;
        }

        $config2class = [
            'mysqli'       => 'Mysqli',
            'pdo-postgres' => 'PdoPostgres',
            'pdo-sqlite'   => 'PdoSqlite',
        ];

        if (!array_key_exists($serendipity['dbType'], $config2class)) {
            throw new Exception('Database type "' . $serendipity['dbType'] . '" not supported!');
        }

        // Name of database class
        $dbClass = '\\LuckyCoin\\Database\\' . $config2class[$serendipity['dbType']] . 'Database';

        self::$db_instance = new $dbClass($serendipity);
        return self::$db_instance;
    }
}
