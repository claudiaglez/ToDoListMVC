<?php

use Controllers\ToDoController;

require_once("./controllers/ToDoController.php");

$object = new ToDoController();
$object->save($_POST['Title'], $_POST['Description']);


?>