<?php

require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/head.php");
require_once("/xampp/htdocs/FemCoders/ToDoListMVC/controllers/ToDoController.php");

$object = new ToDoController();
$date = $object->show($_GET['id']);


?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Editar Tarea</h2>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date["id"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tarea</label>
    <div class="col-sm-10">
      <input type="text" name="Title" class="form-control" id="inputPassword" value="<?= $date["title"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
      <input type="text" name="Description" class="form-control" id="inputPassword" value="<?= $date["description"]?>">
    </div>
  </div>
    <input type="submit" value="Actualizar" class="btn btn-success">
    <a href="show.php?id=<?= $date["id"]?>" class="btn btn-danger">Cancelar</a>
  </div>
</form>

<?php
    require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/footer.php");
?>
