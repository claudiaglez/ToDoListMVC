<?php

class ToDoModel{

    private $PDO;
    public function __construct()
    {
        require_once("../../config/Database.php");
        $connect = new Database();
        $this->PDO = $connect->connection();

    }

    public function insert($Title, $Description){
        $statement = $this->PDO->prepare("INSERT INTO task (title, description) VALUES (:Title, :Description)");
        $statement->bindParam(":Title", $Title);
        $statement->bindParam(":Description", $Description);

        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $statement = $this->PDO->prepare("SELECT * FROM task where id = :id limit 1");
        $statement->bindParam(":id",$id);

        return ($statement->execute()) ? $statement->fetch() : false;
    }

    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM task");

        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    public function update($id, $Title, $Description){
        $statement = $this->PDO->prepare("UPDATE task SET title = :title, description = :description WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->bindParam(":title", $Title);
        $statement->bindParam(":description", $Description);

        return ($statement->execute()) ? $id : false;
    }

    public function delete($id){
        $statement = $this->PDO->prepare("DELETE FROM task WHERE id = :id");
        $statement->bindParam(":id",$id);
        return ( $statement->execute()) ? true : false;
        }

}





?>