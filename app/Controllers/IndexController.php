<?php 

    namespace App\Controllers;

    use MF\Controller\Action;
    
    class indexController extends Action{

        public function login(){
            $this->render('login');
        }

    }

?>