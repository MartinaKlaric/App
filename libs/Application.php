<?php

namespace Core;

class Application
{
    public function __construct(private Router $router = new Router())
    {}

    public function run()
    {
        $route = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        echo $this->router->resolve($route, $method);
    }
}