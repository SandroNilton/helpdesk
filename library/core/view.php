<?php

    class view{
        function getView($controller, $view, $data = ""){
            $controller = get_class($controller);
            if($controller == "home"){
                $view = VIEW.$view.".php";
            }else{
                $view = VIEW.$controller."/".$view.".php";  
            }
            require_once($view);
        }
    }

?>