<?php

namespace App;


class Route{

    public function initRoute(){
        $routes['home']=array(
            'route'=>'/',
            'controller'=>'indexCOntroller',
            'action'=>'indexController'

        );

        $routes['sobre_nos']=array(
            'route'=>'/',
            'controller'=>'indexCOntroller',
            'action'=>'indexController'
            
        );
   }

    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        
    }
    
}
