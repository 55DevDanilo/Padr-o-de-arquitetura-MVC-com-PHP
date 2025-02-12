<?php


namespace App;


class Connection {

    public  static function getDb(){//estatico pois assim não sera preciso criar uma estancia toda vez basta apenas passar a referencia

        try {
            $conn = new \PDO(

                "mysql:host=localhost;dbname=mvc;port=3307;charset=utf8",/*pode ocorrer um erro nessa linha no comando charset*/
                "root",
                "danilo1997",             
            );

            return $conn;
        } 
        catch (\PDOException $e) {
            //throw $th;
            
            echo "<div h1 style='background-color:Tomato;color:white'><b>Erro encontrado </b></div></br>";
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
        }

    }
}
