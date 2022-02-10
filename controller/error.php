<?php

    class err extends controller{
        public function __construct(){
            parent::__construct();
        }

        public function notFound(){
            $this->view->getView($this, "error");
        }
    }

    $notFound = new err();
    $notFound->notFound();

?>