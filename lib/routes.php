<?php 
namespace Lib;
// require_once __DIR__.'/../resource';
class Routes {
    private static $routes = [];
    private static $staticDir = '/../resource';


    public static function get($uri,$callback){
        $uri = trim($uri,"/");       
        self::$routes['GET'][$uri]= $callback;
    }

    public static function post($uri,$callback){
        $uri = trim($uri,"/");
        self::$routes['POST'][$uri]= $callback;

    }

    public static function put($uri,$callback){
        $uri = trim($uri,"/");
        self::$routes['PUT'][$uri]= $callback;

    }

    public static function delete($uri,$callback){
        $uri = trim($uri,"/");
        self::$routes['DELETE'][$uri]= $callback;

    }

    public static function dispatched(){
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri,"/");
        $method= $_SERVER["REQUEST_METHOD"];

        //echo "URI:   ".$uri;
        //echo "METHOD:  ".$method;

        if(!in_array($method,['GET', 'POST', 'PUT', 'DELETE'])){
            echo "metodo no permitido: ".$method;
        }else{
          
            //echo "Metodos Permitido". $method;
            foreach(self::$routes[$method] as $route=>$callback){
                if(strpos($route,":") != false ){
                    /* Esta funcion preg_replace me permite primero evaluar como 1 parametro una expresion regular dde que ssi se enncuentra con : evaluaa si tienne un caracter alfanumerico o cadea de ccaracctteres y paasa al ssegundi paamettro si se cumplle  */
                    $route = preg_replace("#:[a-zA-Z0-9]+#","([a-zA-Z0-9]+)",$route);
                    // echo $route;
                    // return;
                }
                if(preg_match("#^$route$#",$uri,$matches)){
                    //$callback();
                    //Accedo aal indicce por eso creo un array de acuerdo all arraay 
                    $params = array_slice($matches,1);
                    //ddesdoblar un array en varias vvariabes
                    // $response= $callback(...$params);
                    if(is_callable($callback)){
                        $response= $callback(...$params);
                    }

                    if(is_array($callback)){
                        $controller= new $callback[0];
                        $response = $controller->{$callback[1]}(...$params);
                    }
                    
                    if(is_array($response) || is_object($response)){
                        echo json_encode($response);
                    }else{
                        echo $response;
                    }
                    return;
                }

            }
            echo "404 not fund";
        }
            // Si la ruta no se encuentra, intenta servir un archivo estático
            //self::serveStatic($uri);
    }

    
}

