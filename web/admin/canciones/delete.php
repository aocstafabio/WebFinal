<?php
include_once("principal.php");
require __DIR__ . '/../../../web/php/controllers/admin/canciones/delete.controller.php';
session_start();
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <form action="../../php/controllers/admin/canciones/drop.controller.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $cancion->id ?>  ">
                <p>¿Desea eliminar esta canción?</p>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
            <button class="btn btn-primary" onclick="window.location.href='index.php'">Cancelar</button>
        </div>
    </div>
</div>