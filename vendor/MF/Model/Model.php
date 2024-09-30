<?php 
    namespace MF\Model;

    abstract class Model{
        protected $con;

        public function __construct(\PDO $con) {
            $this->con = $con;
        }

        public function __set($nome, $valor){
            $this->$nome = $valor;
        }

        public function __get($nome){
            return $this->$nome;
        }
    }
?>