<?php 
    namespace App\Models;

    use MF\Model\Model;

    class Livro extends Model{

        public function getLivro(){
            $q = "SELECT titulo FROM livro";
            return $this->con->query($q)->fetchAll();

        }
        

    }

?>