<?php

namespace App\Controllers;

//recursos do Framework
use MF\Controller\Action;
use MF\Model\Container;
//os models

use App\Models\Produto;
use App\Models\Info;


class IndexControllers extends Action {

	public function index() {

		//$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

		//instância de conexão
		// $conn = Connection::getDb();

		// //instanciar modelo
		// $produto = new Produto($conn);

		$produto= Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		@$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		//instância de conexão
		// $conn = Connection::getDb();

		// //instanciar modelo
		// $info = new Info($conn);

		$info=Container::getModel('Info');

		$informacoes= $info->getInfo();

		@$this->view->dados = $informacoes;
		
		//$this->view->dados = array('Notebook', 'Smartphone');
		$this->render('sobreNos', 'layout1');
	}

}


?>