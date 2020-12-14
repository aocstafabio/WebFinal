<?php
include_once("principal.php");
require __DIR__ . '/../../../web/php/controllers/admin/canciones/edit.controller.php';
require __DIR__ . '/../../php/controllers/admin/canciones/subir.controller.php';
session_start();
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <form action="../../php/controllers/admin/canciones/update.controller.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $cancion->nombre ?>">
                </div>
                <div class="form-group">
                    <label for="artista">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista" value="<?php echo $cancion->artista ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $cancion->id ?>  ">
                <label for="genero_id">Genero: </label><br>
                <select name="genero_id" id="genero_id">
                    <?php foreach ($generos as $genero) : ?>
                        <option value="<?php echo $genero->id ?>"><?php echo $genero->nombre ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="form-group"> <br>
                    <input type="file" id="banner" name="banner" value="">
                <div class="form-group"><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>