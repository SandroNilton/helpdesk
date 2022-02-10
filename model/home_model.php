<?php

    class home_model{
        public function __construct(){
            echo "Message from model home";
        }

        public function getCar($params){
            return "Datos del carrito No.".$params;
        }
    }

?>