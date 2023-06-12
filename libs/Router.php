<?php

namespace Core;

class Router
{
    private static array $routes = [];

    public static function get(string $route, callable|array $callback): void //callback može biti il callable ili array 
    {                                                                         //(ili funkcija ili niz)
        self::$routes['GET'][$route] = $callback;
    }
    public function resolve(string $route, string $method): string
    {
        $callback = self::$routes[$method][$route];
        if ($callback === null) {
            return '404 - Page not found';
        }

        if (is_array($callback)) {
            // callback is an array with controller class and method
            $controller = new $callback[0](); //istanciramo genrecontroller

            $response = $controller->{$callback[1]}();
        } else {
            // callback is a function, just call it to get the response
            $response = $callback();
        }

        if (is_array($response)){
            return json_encode($response);
        }
        return $response;
    }
}