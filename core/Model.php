<?php

namespace Core;

use PDO;
use PDOException;

abstract class Model
{
    protected static $db;

    public function __construct()
    {
        if (!self::$db) {
            try {
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
                self::$db = new PDO($dsn, DB_USER, DB_PASS);
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                self::$db->setAttribute(PDO::ATTR_ERR_MODE, PDO::ERR_MODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database Connection Error: " . $e->getMessage());
            }
        }
    }
}
