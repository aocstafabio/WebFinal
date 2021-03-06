<?php
require 'php/canciones/index.php';
?>


<div class="container">
        <div class="row">
            <?php if (count($canciones)) : ?>
                <?php foreach ($canciones as $cancion) : ?>
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="images/<?php echo $cancion->banner; ?>" class="card-img" alt="<?php echo $cancion->nombre ?>">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $cancion->nombre ?></h5>
                                        <p class="card-text"><?php echo $cancion->Descrip ?></p>
                                        <p class="card-text"><small class="text-muted">Artista: <?php echo $cancion->artista ?></small></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h1>No hay canciones disponibles</h1>
            <?php endif; ?>
        </div>
    </div>