<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@400;700&family=Quicksand&display=swap" rel="stylesheet">
    <title>Sitio El Mundo del Vino</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header>
<!--AQUÍ COMIENZA EL NAVBAR-->
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#">El mundo del vino</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=registro">Registro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=ingreso">Ingreso</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=inicio">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=salir">Salir</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=historia">Historia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=notas">Notas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-scroll href="index.php?ruta=novedades">Novedades</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<!--AQUÍ CIERRA EL NAVBAR-->
  <main class="encabezado">
    <h1>El mundo del vino</h1>
    <h6>Para los amantes de la bebida de los dioses</h6>
  </main>
  <div id="marca">
    <h1> Login </h1>
  </div>
</header>
<section id="contenido">
  <?php
    if (isset($_GET['ruta'])){
      if(
        $_GET['ruta'] == "registro" ||
        $_GET['ruta'] == "ingreso" ||
        $_GET['ruta'] == "inicio" ||
        $_GET['ruta'] == "salir" ||
        $_GET['ruta'] == "historia" ||
        $_GET['ruta'] == "notas" ||
        $_GET['ruta'] == "novedades" ||
        $_GET['ruta'] == "editar"
      ) {
        include "paginas/" . $_GET["ruta"] .".php";
      } else {
        include "paginas/error404.php";
      }
    } else{
      include "paginas/registro.php";
    }
  ?>

</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="vistas/js/script.js"></script>
<!--AQUÍ COMIENZA EL FOOTER-->
  <div class="container">
      <footer class="py-3 my-4">
        <p class="text-center text-muted">&copy; 2023 Bibiana Flamini - Todos los derechos reservados</p>
      </footer>
  </div>
<!--AQUÍ CIERRA EL FOOTER-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>
</html>