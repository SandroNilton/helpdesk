<?php 

    class controller{
        public function __construct(){
            $this->view = new view();
            $this->loadModel();
        }

        public function loadModel(){
            $model = get_class($this)."_model";
            $routClass = "model/".$model.".php";

            if(file_exists($routClass)){
                require_once($routClass);
                $this->model = new $model(); 
            }
        }
    }

?>