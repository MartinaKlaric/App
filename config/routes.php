<?php

use Core\Router;

Router::get('/about', function(){
    return 'About';
});

Router::get('/contact', function(){
    return 'Contact';
});