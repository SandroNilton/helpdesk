<?php

    class mysql extends connection{
        private $connection;
        private $strquery;
        private $arrvalues;

        function __construct(){
            $this->connection = new connection();
            $this->connection = $this->connection->conect();
        }

        //insert
        public function insert(string $query, array $arrvalues){
            $this->strquery = $query;
            $this->arrvalues = $arrvalues;
            $insert = $this->connection->prepare($this->strquery);
            $resinsert = $insert->execute($this->arrvalues);    
            if($resinsert){
                $lastinsert = $this->connection->lastInsertId();
            }else{
                $lastinsert = 0;
            }
            return $lastinsert;
        }

        //select
        public function select(string $query){
            $this->strquery = $query;
            $result = $this->connection->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //select all
        public function select_all(string $query){
            $this->strquery = $query;
            $result = $this->connection->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        //update
        public function update(string $query, array $arrvalues){
            $this->strquery = $query;
            $this->arrvalues = $arrvalues;
            $update = $this->connection->prepare($this->strquery);
            $resexecute = $update->execute($this->arrvalues);
            return $resexecute;
        }

        //delete
        public function delete(string $query){
            $this->strquery = $query;
            $result = $this->connection->prepare($this->strquery);
            $resexecute = $result->execute();
            return $resexecute;
        }

    }

?>