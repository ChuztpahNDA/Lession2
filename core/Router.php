<?php

namespace app\core;
use app\core\Request;
use app\core\Response;
/**
 * Class Router
 * 
 * @author NDA <hv.nguyenducanh@gmail.com>
 * @package app\core
 */

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback===false) {
            $this->response->setStatusCode(404);
            return $this->renderView("error/_404");
        }
        // callback is string 
        if(is_string($callback)){
            return $this->renderView($callback);
        }

        //  convert $callback to object
        if(is_array($callback)){
            $callback[0] = new $callback[0]();
        }
        
        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $param = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $param);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR."/view/layout/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $param)
    {
        $param = $param;
        ob_start();
        include_once Application::$ROOT_DIR."/view/$view.php";
        return ob_get_clean();
    }
}