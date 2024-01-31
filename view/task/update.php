<?php

use Controllers\ToDoController;

require_once("./controllers/ToDoController.php");
$object = new ToDoController();
$object->update($_POST['id'], $_POST['Title'], $_POST['Description']);

?>
