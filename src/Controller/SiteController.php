<?php

namespace App\Controller;

use Core\Controller;

class SiteController extends Controller
{
    public function contact()
    {
        return 'Contact';
        $this->renderView('app', [
            'title' => 'Contact'
        ]);
    }

    public function about()
    {
        $this->renderView('app', [
            'title' => 'About'
        ]);
    }
}
