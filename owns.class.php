<?php
class Owns {
    private $routes;

    function __construct(){
        $this->routes = parse_ini_file("routes.ini");
    }

    public function redirect($url){
        if (array_key_exists($url,$this->routes)){
            header("Location: ".$this->routes[$url]);
        } else {
            http_response_code(404);
            die();
        }
    }
}