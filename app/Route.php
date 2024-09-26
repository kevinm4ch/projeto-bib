<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{

    protected function initRoutes(){
        
        $this->routes = [
            
            'login' => [
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'login'
            ],

            'logout' => [
                'route' => '/logout',
                'controller' => 'AuthController',
                'action' => 'logout'
            ],

            'autenticar' => [
                'route' => '/autenticar',
                'controller' => 'AuthController',
                'action' => 'autenticar'
            ],

            'home' => [
                'route' => '/home',
                'controller' => 'AppController',
                'action' => 'home'
            ],

            'emprestimo' => [
                'route' => '/emprestimo',
                'controller' => 'AppController',
                'action' => 'emprestimo'
            ],

            'devolucao' => [
                'route' => '/devolucao',
                'controller' => 'AppController',
                'action' => 'devolucao'
            ],

            'buscar_livro' => [
                'route' => '/buscar_livro',
                'controller' => 'AppController',
                'action' => 'buscarLivro'
            ]

        ];    
    }

};
?>