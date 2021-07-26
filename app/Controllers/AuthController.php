<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\RegisterModel;

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
        $registerModel = new RegisterModel();

        if($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->valid() && $registerModel->register()) {
                return 'success';
            }

            // echo '<pre>';
            // var_dump($registerModel->errors);
            // exit;

            return $this->render('register', [
                'model' => $registerModel
            ]);
        }

        return $this->render('register', [
            'model' => $registerModel
        ]);
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