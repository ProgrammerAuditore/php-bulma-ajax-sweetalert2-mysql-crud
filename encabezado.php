<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bulma -->
    <link rel="icon" type="image/png" href="https://bulma.io/favicons/favicon-32x32.png?v=201701041855" sizes="32x32">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>CRUD | PHP + Bulma + Ajax + SweetAlert2 + MySQL </title>
    
    
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" id="nav-logo">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" id="nav-productos">
        Productos
      </a>

      <a class="navbar-item" id="nav-crear">
        Crear
      </a>
    </div>

    <div class="navbar-end"></div>
  </div>
</nav>


<script>
  const sitio = window.location.href;
  const logo = document.getElementById("nav-logo");
  const crear = document.getElementById("nav-crear");
  const productos = document.getElementById("nav-productos");

  logo.onclick = () =>{
    window.location.href = "../index.php";
  }

  productos.onclick = () =>{
    window.location.href = "../vistas/listar.php";
  }

  crear.onclick = () =>{
    window.location.href = "../vistas/crear.php";
  }
</script>