<?php

use Controllers\ToDoController;

require_once("./controllers/ToDoController.php");

$object = new ToDoController;
$object->delete($_GET{'id'});

?>