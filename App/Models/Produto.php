<?php

namespace App\Models;



class Produto 
{
    protected $db;

    public function __construct(\PDO $db){//\PDO -> "\" PARA ENCONTRAR O PDO NA RAIZ DO PHP
        $this->db=$db;

    }

    public function getProdutos() {

        $query = "select id, descricao,preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
        
    }
}


?>