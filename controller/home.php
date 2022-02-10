<?php 

    class home extends controller{
        public function __construct(){
            parent::__construct();
        }

        public function home($params){
            $this->view->getView($this, "home");
        }
    }

?>