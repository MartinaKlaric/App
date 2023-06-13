<?php

namespace Core;

class Application
{
    public function __construct(private Router $router = new Router()) //istanciramo novi Router i sad
    {}                                              //ga možemo koristiti

    public function run()
    {
        $route = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD']; //uzima $route i $method i 

        echo $this->router->resolve($route, $method); //daje to Router.php -u
    }
}

//ova aplikacija samo uzima naš request i vraća response