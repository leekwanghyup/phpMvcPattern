<?php 

namespace app\core;

use app\controllers\Controller;

class Application
{
    public static string $ROOT_DIR; 
    public static Application $app; 
    
    public Router $router; 
    public Controller $controller;
    public Request $requst; 
    public Response $response; 

    public function __construct($rooPath)
    {
        self::$ROOT_DIR = $rooPath; 
        self::$app = $this;
        $this->request = new Request(); 
        $this->response = new Response(); 
        $this->router = new Router($this->request, $this->response); 
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
?>