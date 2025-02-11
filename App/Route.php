<?php

namespace App;
use MF\Init\Bootstrap;//permitido usar devido a configuração no autoload composer.json



class Route  extends Bootstrap
{
 protected function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexControllers',
            'action' => 'index'

        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'indexControllers',
            'action' => 'sobreNos'

        );

        $this->setRoutes($routes);
    }

    
}
