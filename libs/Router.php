<?php

namespace Core;

class Router
{
    private static array $routes = [];

    public static function get(string $route, callable|array $callback): void //callback može biti il callable ili array 
    {                                                                         //(ili funkcija ili niz)
        self::$routes['GET'][$route] = $callback;
    }
    public function resolve(string $route, string $method): string //string $route i $method povlačimo iz Application.php
    {
        $callback = self::$routes[$method][$route];
        if ($callback === null) {   //ako je callback null (upišemo /(neka ruta koju nismo definirali)) baci 404
            return '404 - Page not found';
        }

        if (is_array($callback)) {
            // callback is an array with controller class and method
            $controller = new $callback[0](); //istanciramo 1. kontroler (genrecontroller)

            $response = $controller->{$callback[1]}(); //pozivamo funkciju koja je definirana kao 2. element
        } else {
            // callback is a function, just call it to get the response
            $response = $callback();
        }

        if (is_array($response)){   //ako je odgovor nekakav niz, vrati json_encode u aplikaciju
            return json_encode($response);
        }
        return $response;
    }
}