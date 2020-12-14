<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home.php">FINAL ACOSTA FABIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="generos.php">Generos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buscador.php">Buscador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Parcial2/web/admin/canciones/index.php">Editar</a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['auth'])) : ?>
            <a class="nav-link" href="logout.php">Cerrar sesion</a>
          <?php else : ?>
            <a class="nav-link" href="acceder.php">Login</a>
          <?php endif ?>
        </li>
      </ul>
    </div>
  </div>
</nav>