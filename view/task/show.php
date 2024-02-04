<?php

require_once("/xampp/htdocs/FemCoders/ToDoListMVC/controllers/ToDoController.php");
require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/head.php");

$object = new ToDoController();
$date = $object->show($_GET['id']);

?>




<h2 class="text-center">Cambios en la tarea</h2>
<div class="pb-3">

    <a href="./index.php" class="btn btn-primary">Lista de tareas</a>

    <a href="edit.php?id=<?= $date["id"]?>" class="btn btn-success">Editar</a>

    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                    Una vez eliminado será irrecuperables.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date["id"]?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tarea</th>
            <th scope="col">Descripción</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"] ?></td>
            <td scope="col"><?= $date["title"] ?></td>
            <td scope="col"><?= $date["description"] ?></td>
        </tr>
    </tbody>
</table>

<?php
    require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/footer.php");
?>