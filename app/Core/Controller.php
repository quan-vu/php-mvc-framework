<?php

namespace App\Core;

/**
 * Class Controller
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Core
 */
class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}