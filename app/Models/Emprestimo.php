<?php 
    namespace App\Models;

    use MF\Model\Model;

    class Emprestimo extends Model{

        
        public function incluirEmprestimo($usuario){
            $sqlUsuario = "SELECT id_usuario FROM usuario WHERE nome = :usuario";


        }

    }

?>