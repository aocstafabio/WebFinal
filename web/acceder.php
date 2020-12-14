<?php session_start();
include_once("header.php");
include_once("nav.php");
?>


<body>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-6 my-5">
                <div class="col-lg-12">
                    <h1>
                        <center>BIENVENIDX</center>
                    </h1><br>
                    <h6>
                        <center>Logueate para acceder al sistema de gestión de música</center>
                    </h6><br>
                    <div class="card my-3">
                        <h5 class="card-header">Login</h5>
                        <div class="card-body">
                            <?php include 'partials/message.php'; ?>
                            <form method="POST" action="php/controllers/login.controller.php">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                                </div>
                                <p class="text-right">
                                    <center><button type="submit" class="btn btn-primary" text-aling="center">Entrar</button></center>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>