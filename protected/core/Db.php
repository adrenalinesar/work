<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 11:39
 */

namespace core;
use core\Registry;

class Db {
    protected static $_instance;


    private function __construct(){

    }

    private function __clone(){

    }

    public static function getInstance(){
        if (null === self::$_instance) {
            $values = Registry::get('config');
            $valuesDb = $values['db'];
            $connectionString = "sqlite:" . $valuesDb['path'] . DIRECTORY_SEPARATOR . $valuesDb['name'];
            self::$_instance = new \PDO($connectionString);
            self::$_instance->query ( 'SET character_set_connection = utf-8' );
            self::$_instance->query ( 'SET character_set_client = utf-8' );
            self::$_instance->query ( 'SET character_set_results = utf-8' );
            self::$_instance->query ( 'SET NAMES utf8' );
            self::$_instance->setAttribute(\PDO::ATTR_EMULATE_PREPARES, FALSE);
        }
        return self::$_instance;
    }
}