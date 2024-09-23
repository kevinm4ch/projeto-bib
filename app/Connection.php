<?php 
    namespace App;

    class Connection {
        public static function connect(){

            try{

                $host = "localhost";
                $dbname = "biblioteca";
                $user = "root";
                $pass = "admin";

                $con = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

                return $con;

            }catch(\PDOException $e){
                
                echo "<pre>[ERRO:{$e->getCode()}]-> {$e->getMessage()}\n{$e->getTrace()}\n{$e->getTraceAsString()}</pre>";
            }
        }
    }
?>