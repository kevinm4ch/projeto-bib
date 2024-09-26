<?php 
    //Bootstrap éum termo muito utilizado para arquivos de inicialização
    namespace MF\Init;

    abstract class Bootstrap{
        
        private $routes;
        abstract protected function initRoutes();

        public function __construct() {
            $this->initRoutes();
            $this->run($this->getURL());
        }

        public function __get($name){
            return $this->$name;
        }

        public function __set($name, $value){
            $this->$name = $value;
        }

        

        protected function run($url){
            foreach($this->routes as $route){
                if($url === $route['route']){
                    $class_controller = "App\\Controllers\\".ucfirst($route['controller']);
    
                    $controller = new $class_controller;         
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }
    
        protected function getURL(){
            return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        }

    }
?>