<?php 
    namespace MF\Controller;

    abstract class Action{
        
        protected $view;

        public function __construct() {
            $this->view = new \stdClass();
        }

        protected function render($view, int $layout = null){
            $this->view->page = $view;
            $layout_path = "../app/Views/layout{$layout}.phtml";

            if(file_exists($layout_path)){
                require_once $layout_path;
            }else{
                $this->content();
            }
        }
        
        protected function content(){    
            $viewDir = str_replace('App\\Controllers\\', '', get_class($this));
    
            $viewDir = strtolower(str_replace('Controller', '', $viewDir));
    
            require_once "../app/Views/$viewDir/{$this->view->page}.phtml";
        }


        protected function erro(string $erro){
            echo "
            <div id='erro'>
                        <div id='erro-content' class='bib-danger'>
                            <i class='fa-regular fa-circle-xmark'></i><p>$erro</p>
                        </div>
                    </div>
            ";
        }

        protected function toString($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }

    }

?>