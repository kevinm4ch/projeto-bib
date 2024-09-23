<?php 

    namespace MF\Model;

    use App\Connection;

    class Container {
        public static function getModel($model){
            $modelClass = "\\App\\Models\\".ucfirst($model);
            $con = Connection::connect();

            return new $modelClass($con);
        }
    }
?>