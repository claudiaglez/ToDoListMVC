<?php
use config\Database;

require "/xampp/htdocs/FemCoders/ToDoListMVC/vendor/autoload.php";
require_once("/xampp/htdocs/FemCoders/ToDoListMVC/model/ToDoModel.php");

class ToDoController{
    private $model;
    public function __construct()
    {
        $this->model = new ToDoModel();
    }

    public function store($Title, $Description){
        $id = $this->model->insert($Title, $Description);
        return ($id!=false) ? header("Location: show.php?id=".$id) : header("Location:create.php");
    }

    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $Title, $Description){
        return ($this->model->update($id,$Title, $Description) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }

    public function delete($id){
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
            }

    }




?>