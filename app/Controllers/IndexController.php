<?php 

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Livro;
use MF\Model\Container;

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
            $livro = Container::getModel('Livro');
            $info = $livro->getLivro();
            
            @$this->view->dados = $info;
            $this->render('buscar_livro');
        }

    }

?>