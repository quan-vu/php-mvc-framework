<?php

namespace App\Core;

/**
 * Class Application
 * 
 * @author Quan Vu <info@quanvu.net>
 * @package App\Core
 */
class Application
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}