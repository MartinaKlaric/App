<?php

namespace App\Controller;

class MediaController
{
    public function index()
    {
        $media = new Media();

        return $media->findAll();
    }
}