<?php
include_once("principal.php");
require __DIR__ . '/../../php/controllers/admin/canciones/index.controller.php';

if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('location: /Parcial2/web/acceder.php');
} ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_SESSION['alert']) && $_SESSION['alert']['message']) : ?>
                <div class="alert alert-<?php echo $_SESSION['alert']['type'] ?> ">
                    <?php echo $_SESSION['alert']['message']; ?>
                </div>
                <?php unset($_SESSION['alert']); ?>
            <?php endif; ?>
            <br><br>
            <button class="btn btn-primary" onclick="window.location.href='subir.php'">Subir</button><br><br>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <td>Título</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($canciones as $cancion) : ?>

                        <tr>
                            <td><?php echo $cancion->nombre; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $cancion->id; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                <a href="delete.php?id=<?php echo $cancion->id; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>