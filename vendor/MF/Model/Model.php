<?php 
    namespace MF\Model;

    abstract class Model{
        protected $con;

        public function __construct(\PDO $con) {
            $this->con = $con;
        }
    }
?>