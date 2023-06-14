<?php

namespace App\Controller;
use App\Model\Media;

class MediaController
{
    public function index()
    {
        $media = new Media();

        return $media->findAll();
    }
}