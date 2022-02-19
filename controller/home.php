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

        public function insert(){
            $data = $this->model->setuser("sandro");
            print_r($data);
        }

        public function show($id){
            $data = $this->model->getuser($id);
            print_r($data);
        }

        public function update(){
            $data = $this->model->updateuser(1, "Juan");
            print_r($data);
        }

        public function showall(){
            $data = $this->model->getusers();
            print_r($data);
        }

        public function delete($id){
            $data = $this->model->deleteuser($id);
            print_r($data);
        }
    }

?>