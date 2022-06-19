<?php

namespace App;

class Connection {
    
    public static function getDb() {
        try {
            
            $conn = new \PDO("mysql:host=localhost;dbname=nome_db;charset=utf8","usuario", "senha");

            return $conn;

        }catch (\PDOException $e) {
            //
        }
    }
}

?>