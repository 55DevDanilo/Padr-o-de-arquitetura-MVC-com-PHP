<?php

namespace App\Models;



class Info 
{
    protected $db;

    public function __construct(\PDO $db){//\PDO -> "\" PARA ENCONTRAR O PDO NA RAIZ DO PHP
        $this->db=$db;

    }

    public function getInfo() {

        $query = "select titulo, descricao from tb_info";
        return $this->db->query($query)->fetchAll();
        
    }
}


?>