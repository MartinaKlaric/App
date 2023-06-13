<?php

use App\Controller\GenreController;
use App\Controller\SiteController;
use Core\Router;

Router::get('/about', function(){
    return 'About';
});

Router::get('/contact', [SiteController::class, 'contact']); //hoćemo SiteController i unutar njega pozvati metodu contact
Router::get('/genres', [GenreController::class, 'index']);