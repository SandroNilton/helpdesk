<?php

    class home_model extends mysql{
        public function __construct(){
            parent::__construct();
        }

        public function setuser(string $name){
            $query = "INSERT INTO user(name) VALUES(?)";
            $arrdata = array($name);
            $request = $this->insert($query, $arrdata);
            return $request;
        }

        public function getuser($id){
            $query = "SELECT * FROM user WHERE id = $id";
            $request = $this->select($query);
            return $request;    
        }

        public function updateuser(int $id, string $name){
            $query = "UPDATE user SET name = ? WHERE id = $id";
            $arrdata = array($name);
            $request = $this->update($query, $arrdata);
            return $request;
        }

        public function getusers(){
            $query = "SELECT * FROM user";
            $request = $this->select_all($query);
            return $request;
        }

        public function deleteuser(int $id){
            $query = "DELETE FROM user WHERE id = $id";
            $request = $this->delete($query);
            return $request;
        }
    }

?>