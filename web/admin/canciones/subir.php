<?php
include_once("principal.php");
require __DIR__ . '/../../php/controllers/admin/canciones/subir.controller.php';
session_start();
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <form action="../../php/controllers/admin/canciones/up.controller.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="">
                </div>
                <div class="form-group">
                    <label for="artista">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista" value="">
                </div>
                <label for="genero_id">Genero: </label><br>
                <select name="genero_id" id="genero_id">
                    <?php foreach ($generos as $genero) : ?>
                        <option value="<?php echo $genero->id ?>"><?php echo $genero->nombre ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="id" value="">
                <div class="form-group"> <br>
                    <input type="file" id="banner" name="banner" value=""><br><br>
                    <button type="submit" class="btn btn-primary">Subir</button>
                </div>
            </form>
        </div>
    </div>
</div>