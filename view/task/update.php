<?php

require_once("/xampp/htdocs/FemCoders/ToDoListMVC/controllers/ToDoController.php");
$object = new ToDoController();
$object->update($_POST['id'], $_POST['Title'], $_POST['Description']);

?>
