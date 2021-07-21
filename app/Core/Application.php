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
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    /**
     * @param \App\Core\Controller $controller
     */
    public function setController(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}