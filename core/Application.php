<?php
namespace app\core;

class Application
{
    public static string $ROOT_DIR;
    public Request $request;
    public Response $response;
    public Router $router;
    public static Application $app;
    public Database $db;

    public function __construct($rootPath, array $config)
    {   
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;

        // Router
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        
        // Database
        $this->db = new Database($config['db']);   
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}