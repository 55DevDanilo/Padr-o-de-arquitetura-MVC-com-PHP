<?php

//Utilizado para estabelecer scripts de inicialização das aplicacções
//metodos relativos ao framework

namespace MF\Init;
//classe abstrata ñ pode ser intânciada somente herdada
abstract class Bootstrap
{


    private $routes;
    abstract protected function initRoutes();

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }
    public function getRoutes()
    {
        return $this->routes;
    }

    protected function run($url)
    {

        //echo '**********'.$url.'*****************';
        foreach ($this->getRoutes() as $key => $route) {
            // print_r($route);
            // echo'<br><br><br><br><br><br>';
            if ($url == $route['route']) {
                $class = "App\\Controllers\\" . ucfirst($route['controller']);

                $controller = new $class; //é igual fazer desta forma = App\Controller\IndexController
                $action = $route['action'];
                $controller->$action();
            }
            # code...
        }
    }
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
