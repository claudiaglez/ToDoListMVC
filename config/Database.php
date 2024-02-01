<?php

class Database {
    private $host = "localhost";
    private $dbname = "to_do_list";
    private $username = "root";
    private $password = "";
    private $PDO;

    public function connection(){
        try {
            $this->PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
            return $this->PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


}