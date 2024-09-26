<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{

    protected function initRoutes(){
        
        $this->routes = [
            
            'login' => [
                'route' => '/',
                'controller' => 'indexController',
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
                'controller' => 'indexController',
                'action' => 'home'
            ],

            'emprestimo' => [
                'route' => '/emprestimo',
                'controller' => 'indexController',
                'action' => 'emprestimo'
            ],

            'devolucao' => [
                'route' => '/devolucao',
                'controller' => 'indexController',
                'action' => 'devolucao'
            ],

            'buscar_livro' => [
                'route' => '/buscar_livro',
                'controller' => 'indexController',
                'action' => 'buscarLivro'
            ]

        ];    
    }

};
?>