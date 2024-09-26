<?php 

    namespace App\Controllers;

    use MF\Controller\Action;
    
    class indexController extends Action{

        public function login(){
            session_start();

            if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == false){
                $this->render('login');
            }else{
                header('Location: /home');
            }
        }

    }

?>