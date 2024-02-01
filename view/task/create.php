<?php
    require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/head.php");
?>
<form action="store.php" method="POST" autocomplete="off">
<div class="mb-3">
        <label for="Title" class="form-label">Nueva tarea</label>
        <input type="text" name="Title" required class="form-control" id="Title" aria-describedby="emailHelp">

        <label for="Description" class="form-label">Descripción</label>
        <input type="text" name="Description" required class="form-control" id="Description" aria-describedby="emailHelp">

        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>     
        </div>
    
       
        
    </div>

    <?php
    require_once("/xampp/htdocs/FemCoders/ToDoListMVC/view/head/footer.php");
?>
