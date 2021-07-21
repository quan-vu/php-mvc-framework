<?php

namespace App\Controllers;

use App;
use App\Core\Application;

/**
 * Class Application
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Controller
 */
class SiteController
{
    public function home()
    {
        $params = [
            'title' => 'PHP MVC Framework',
        ];
        return Application::$app->router->renderView('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function storeContact()
    {
        return 'Handling submitting data';
    }
}