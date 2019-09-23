<?php
class Config{
    static $confArray = array(
        'host' => '127.0.0.1',
        'dbname' => 'crepes',
        'user' => 'anna',
        'pass' => 'AhhA1880695+',
        'charset' => 'utf8'
    );
    
    public static function read($name) {
        return self::$confArray[$name];
    }

}