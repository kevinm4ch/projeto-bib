<?php 
    namespace App;

    class Connection {
        public static function connect(){

            try{

                $host = "localhost";
                $dbname = "library_system";
                $user = "root";
                $pass = "";

                $con = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

                return $con;

            }catch(\PDOException $e){
                
                echo "<pre>\n\n[ERRO:{$e->getCode()}]-> {$e->getMessage()}\n\n{$e->getTraceAsString()}</pre>";
            }
        }
    }
?>