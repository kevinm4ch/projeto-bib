<?php 

    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;
    
    class indexController extends Action{

        public function login(){
            $this->render('login');
        }

        public function home(){
            $this->render('home', 1);
        }
        
        public function emprestimo(){
            $this->render('emprestimo', 1);
        }

        public function devolucao(){
            $this->render('devolucao', 1);
        }

        public function buscarLivro(){

            if(isset($_POST["busca-livro"]) && !empty($_POST["busca-livro"])){
                $livro = Container::getModel('Livro');
                $info = $livro->getLivro($_POST["busca-livro"], $_POST["radio-busca"]);
                @$this->view->dados = $info;
            }
            $this->render('buscar_livro', 1);
        }

    }

?>