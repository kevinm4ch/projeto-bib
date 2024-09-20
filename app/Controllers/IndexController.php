<?php 

    namespace App\Controllers;

    use MF\Controller\Action;

    class indexController extends Action{

        public function home(){
            $this->render('home');
        }
        
        public function emprestimo(){
            $this->render('emprestimo');
        }

        public function devolucao(){
            $this->render('devolucao');
        }

        public function buscarLivro(){
            $this->render('buscar_livro');
        }

    }

?>