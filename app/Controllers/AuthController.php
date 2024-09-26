<?php 

    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;
    
    class AuthController extends Action{
        
        public function autenticar(){
            session_start();

            $usuario = Container::getModel('Usuario');

            $user = $usuario->autenticar($_POST['usuario'], $_POST['senha']);

            if(!empty($user)){
                $_SESSION['autenticado'] = true;
                $_SESSION['nome-usuario'] = $user['nome'];
                $_SESSION['tipo-usuario'] = $user['tipo_usuario'];
                header('Location: /home');
            }else{
                header('Location: /');
            }
        }

        public function logout(){
            session_start();

            session_unset();

            session_destroy();

            header('Location: /');

        }

    }

?>