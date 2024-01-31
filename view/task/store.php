<?php



require_once("/xampp/htdocs/FemCoders/ToDoListMVC/controllers/ToDoController.php");
require "/xampp/htdocs/FemCoders/ToDoListMVC/vendor/autoload.php";

$object = new ToDoController();
$object->store($_POST['Title'], $_POST['Description']);


?>