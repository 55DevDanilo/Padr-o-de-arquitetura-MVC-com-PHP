<?php

namespace App\Controllers;

class IndexControllers
{

    private $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function index()
    {

        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        $this->render('index');
    }

    public function sobreNos()
    {

        $this->view->dados = array('Notebook', 'Smartphone');
        $this->render('sobreNos');
    }

    public function render($view)
    {
        $classAtual = get_class($this);

        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);

        $classAtual = strtolower(str_replace('Controllers', '', $classAtual));

        require_once "../App/Views/" . $classAtual . "/" . $view . ".phtml";
    }
}
