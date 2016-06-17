<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 10:11
 */

namespace core;

class Registry{
    protected static $_registry = array();
    
    public static function set($k, $v){
        if(!array_key_exists($k, self::$_registry)){
            self::$_registry[$k] = $v;
        }
    }
    
    public static function get($k){
        if(array_key_exists($k, self::$_registry)){
            return self::$_registry[$k];
        }
    }
}