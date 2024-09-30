<?php 

    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;
    
    class AppController extends Action{

        public function __construct() {
            parent::__construct();
            $this->verificarAutenticacao();
        }

        public function home(){
            $this->render('home', 1);
        }
        
        public function emprestimo(){
            $usuario = Container::getModel('Usuario');
            
            $listaUsuarios = $usuario->getAllUsuario();
            
            @$this->view->dados = $listaUsuarios;

            $this->render('emprestimo', 1);
        }

        public function devolucao(){
            $this->render('devolucao', 1);
        }

        public function buscarLivro(){

            if(isset($_GET['emprestimo'])){
                $_SESSION['novo_emprestimo'] = [
                    'num_emprestimo' => $_GET['emprestimo'],
                    'usuario' => $_GET['usuario'],
                ];
            }
            
            if(isset($_POST["busca-livro"]) && !empty($_POST["busca-livro"])){
                $livro = Container::getModel('Livro');
                $info = $livro->getLivro($_POST["busca-livro"], $_POST["radio-busca"]);
                @$this->view->dados = $info;
            }
            $this->render('buscar_livro', 1);
        }

        public function novoEmprestimo(){
            $usuario = Container::getModel('Usuario');

            $usuarioEmprestimo = $usuario->getUsuario('nome', $_SESSION['novo_emprestimo']['usuario']);

            $_SESSION['novo_emprestimo']['usuario'] = $usuarioEmprestimo->id_usuario;

            $emprestimo = Container::getModel('Emprestimo');

            $emprestimo->incluirEmprestimo();

        }

        private function verificarAutenticacao(){
            session_start();
            if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == false){
                header('Location: /');
            }
        }
    }

?>