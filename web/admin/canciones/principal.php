<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP2 Acosta</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <style>
    body::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 110%;
      background-size: cover;
      background-image: url(/Parcial2/web/images/fondo.jpg);

    }
  </style>
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">FINAL ACOSTA FABIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/Parcial2/web/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Parcial2/web/generos.php">Generos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Parcial2/web/buscador.php">Buscador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Parcial2/web/admin/canciones/index.php">Editar</a>
        </li>
        <li class="nav-item">
          <?php session_start();
          if (isset($_SESSION['auth'])) : ?>
            <a class="nav-link" href="/Parcial2/web/logout.php">Cerrar sesion</a>
          <?php else : ?>
            <a class="nav-link" href="/Parcial2/web/acceder.php">Login</a>
          <?php endif ?>
        </li>
      </ul>
    </div>
  </div>
</nav>