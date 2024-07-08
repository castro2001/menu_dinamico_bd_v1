<?php 
namespace lib\Jordan;

class Router{
    private static $router = [];
    

    public static function get(string $uri, callable $callback){
        $uri = trim($uri,'/');
        self::$router["GET"][$uri]= $callback;
    }

    public static function post(string $uri, callable $callback){
        $uri = trim($uri,'/');
        self::$router["POST"][$uri]= $callback;
    }

    public static function put(string $uri, callable $callback){
        $uri = trim($uri,'/');
        self::$router["PUT"][$uri]= $callback;
    }

    public static function delete(string $uri, callable $callback){
        $uri = trim($uri,'/');
        self::$router["DELETE"][$uri]= $callback;
    }

    public static function dispatched(){
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');

        if(!is_array($method,['GET','POST','PUT','DELETE'])){
            return "metodo no permitido";
        }

        foreach(self::$router[$method] as $route => $callback){
            var_dump($route);
        }
    }

}