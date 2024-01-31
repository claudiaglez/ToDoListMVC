<?php

use Controllers\ToDoController;
require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/head.php");
require_once("./controllers/ToDoController.php");

$object = new ToDoController;
$object->delete($_GET{'id'});

?>
    <?php
    require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/footer.php");
?>