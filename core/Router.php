<?php

namespace Core;
define('ROOT', dirname(__DIR__));
use App\Controller\Errors\Error404;

class Router
{
    private $routes;

    public function __construct()
    {
        $routersPath = ROOT . '/app/Config/config.php';
        $this->routes = include_once $routersPath;
    }

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    private function error()
    {
        $error404 = new Error404();
        $error404->index();
    }

    public function run()
    {
        $uri = $this->getURI();
        $namespace = array_search($uri, $this->routes);

        if ($namespace != false) {
            $classNamespace = explode('@', $namespace);

            if (class_exists($classNamespace[0])) {
                $class = new $classNamespace[0];
                $method = $classNamespace[1] ?? 'index';

                if (method_exists($class, $method)) {
                    $class->$method();
                } else {
                    $this->error();
                }
            } else {
                $this->error();
            }

        } else {
            $this->error();
        }
    }
}

