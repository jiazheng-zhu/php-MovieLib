<?php
namespace App\Core;

class Request {

    public static function uri()
    {
        $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        return str_ireplace('index.php/','', $url);
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
