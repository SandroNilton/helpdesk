<?php 

    class home extends controller{
        public function __construct(){
            parent::__construct();
        }

        public function home(){
            $data['page_id'] = 1;
            $data['page_tag'] ="home";
            $data['page_title'] = "principal page";
            $data['page_name'] = "home";
            $data['page_content'] = "lorem";
            $data['page_name'] = "home";
            $this->view->getView($this, "home", $data);
        }
    }

?>