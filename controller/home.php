<?php 

    class home extends controller{
        public function __construct(){
            parent::__construct();
        }

        public function home($params){
            echo "message from controller";
        }

        public function data($params){
            echo "data recived: ".$params;
        }

        public function car($params){
            $car = $this->model->getCar($params);
            echo $car;
        }
    }

?>