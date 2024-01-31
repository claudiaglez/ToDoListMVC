<?php
?>
<form action="store.php" method="POST" autocomplete="off">
<div>
        <label for="Title" class="form-label">Nueva tarea</label>
        <input type="text" name="Title" required class="form-control" id="Title">

        <label for="Description" class="form-label">Descripción</label>
        <input type="text" name="Description" required class="form-control" id="Description">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Completed" id="Completed">
            <label class="form-check-label" for="Completed">Completada</label>
        </div>
    
    <button type="submit">Guardar</button>
    <a href="index.php">Cancelar</a>    
        
    </div>

