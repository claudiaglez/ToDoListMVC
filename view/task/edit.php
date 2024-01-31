<?php
use Controllers\ToDoController;
require_once("./controllers/ToDoController.php");

$object = new ToDoController();
$date = $object->show($_GET['id']);


?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Editar Tarea</h2>
  <div>
    <label>Id</label>
    <div>
      <input type="text" name="id" readonly id="staticEmail" value="<?= $date["id"]?>">
    </div>
  </div>
  <div>
    <label>Tarea</label>
    <div>
      <input type="text" name="Title"id="inputPassword" value="<?= $date["Title"]?>">
    </div>
  </div>
  <div>
    <label>Descripción</label>
    <div>
      <input type="text" name="Description" class="form-control" id="inputPassword" value="<?= $date["Description"]?>">
    </div>
  </div>
  
    <input type="submit" value="Actualizar">
    <a href="show.php?id=<?= $date["id"]?>">Cancelar</a>
  </div>
</form>


