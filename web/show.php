<?php
require __DIR__ . "/index.php";
require __DIR__ . "/php/controllers/show.controller.php";
?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card-img-top" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="show.php?id=<?php echo $cancion->id ?>"><img src="images/<?php echo $cancion->banner; ?>" class="card-img" alt="<?php echo $cancion->nombre ?>"></a>
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
    </div>
</div>