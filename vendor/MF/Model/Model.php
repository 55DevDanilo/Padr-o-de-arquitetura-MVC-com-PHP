<?php

namespace MF\Model;

abstract class Model
{
    protected $db;

    public function __construct(\PDO $db)
    { //\PDO -> "\" PARA ENCONTRAR O PDO NA RAIZ DO PHP
        $this->db = $db;
    }
}
