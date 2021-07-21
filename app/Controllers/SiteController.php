<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

/**
 * Class SiteController
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Controller
 */
class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'title' => 'PHP MVC Framework',
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function storeContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return 'Handling contact data';
    }
}