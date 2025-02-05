<?php

namespace app\config;

class Router
{
    private static $postRoutes = [];
    private static $getRoutes = [];

    public static function get($path, $handler){
        self::$getRoutes [] = [
            'path' => $path,
            'handler' => $handler
        ];
    }

    public static function post($path, $handler){
        self::$postRoutes [] = [
            'path' => $path,
            'handler' => $handler
        ];
    }
}