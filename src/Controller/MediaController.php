<?php
namespace App\Controller;

use App\Model\Media;
use Core\Controller;

class MediaController extends Controller
{
    public function home()
    {
        $this->renderView('app', [
            'title' => 'Media'
        ]);
    }

    public function index()
    {
        $media = new Media();

        $this->renderView('media', [
            'title' => 'Media',
            'data' => $media->findAll()
        ]);
    }
}