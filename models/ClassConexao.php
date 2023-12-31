<?php

namespace Models;


abstract class DataBase {
    private static $instance;

    protected static function conectaDB() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $erro) {
                echo $erro->getMessage();
            }
        }
        return self::$instance;
    }

    public static function prepare($sql) {
        return self::conectaDB()->prepare($sql);
    }
}
