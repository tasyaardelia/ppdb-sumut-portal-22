<?php

namespace Marsindo\PpdbSumutPortal22\Config;

class Database
{
    private static $pdo = null;

    public static function getConnection($env = "tests")
    {
        if (self::$pdo == null) {
            require_once __DIR__ . '/../../config/database.php';
            $config = getDatabaseConfig();
            self::$pdo = new \PDO(
                $config['database'][$env]['url'],
                $config['database'][$env]['username'],
                $config['database'][$env]['password']
            );
        }

        return self::$pdo;
    }
}
