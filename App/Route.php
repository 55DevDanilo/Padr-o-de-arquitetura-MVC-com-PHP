<?php

namespace App;



class Route{

    private $routes;

    public function __construct()
    {   
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function setRoutes(array $routes){
        $this->routes=$routes;
    }
      public function getRoutes(){
        return $this->routes;
    }
  
    public function initRoutes(){
        $routes['home']=array(
            'route'=>'/',
            'controller'=>'indexControllers',
            'action'=>'index'

        );

        $routes['sobre_nos']=array(
            'route'=>'/sobre_nos',
            'controller'=>'indexControllers',
            'action'=>'sobreNos'
            
        );

        $this->setRoutes($routes);
   }

   public function run ($url){

    //echo '**********'.$url.'*****************';
    foreach ($this->getRoutes() as $key => $route) {
        // print_r($route);
        // echo'<br><br><br><br><br><br>';
        if ($url==$route['route'])  {
            $class = "App\\Controllers\\".ucfirst($route['controller']);

            $controller = new $class;//é igual fazer desta forma = App\Controller\IndexController
            $action=$route['action'];
            $controller->$action();
        }
        # code...
    }




   }

    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        
    }
    
}
