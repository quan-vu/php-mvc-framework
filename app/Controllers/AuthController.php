<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

/**
 * Class AuthController
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Controller
 */
class AuthController extends Controller
{
    // public string $layout = 'auth'; // Use layouts auth.php

    public function register(Request $request)
    {
        if($request->isPost()) {
            // $body = $request->getBody();
            // var_dump($body);
            return 'Handle submitted register data';
        }
        return $this->render('register');
    }

    public function login(Request $request)
    {
        if($request->isPost()) {
            // $body = $request->getBody();
            // var_dump($body);
            return 'Handle submitted login data';
        }
        return $this->render('login');
    }
}