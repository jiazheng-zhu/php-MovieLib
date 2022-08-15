<?php
namespace App\Core;

class App {
    protected static $data = [];

    public static function set($key, $data)
    {
        static::$data[$key] = $data;
    }

    public static function get($key)
    {
        return static::$data[$key];
    }

}
