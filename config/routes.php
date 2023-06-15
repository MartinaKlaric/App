<?php

use App\Controller\GenreController;
use App\Controller\SiteController;
use Core\Router;
use App\Controller\MediaController;

Router::get('/about', [SiteController::class, 'about']); 
Router::get('/contact', [SiteController::class, 'contact']); //hoćemo SiteController i unutar njega pozvati metodu contact
Router::get('/genres', [GenreController::class, 'index']);
Router::get('/media', [MediaController::class, 'index']);
Router::get('/media/home', [MediaController::class, 'home']);