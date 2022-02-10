<?php

    spl_autoload_register(function($class){
        //echo LIB.'core/'.$class.".php";
        if(file_exists(LIB.'core/'.$class.".php")) {
            require_once(LIB.'core/'.$class.".php");
        }
    });

?>