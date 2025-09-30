<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Logo en la izquierda -->
    <a class="navbar-brand" href="#">
      <img src="img/fetichelogo.png" alt="Fetiche Logo" width="40" height="40" class="d-inline-block align-text-top">
    </a>

    <!-- Botón para vista móvil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido de la navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Enlaces -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Registrarse</a>
        </li>
      </ul>

      <!-- Buscador -->
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>SOYFETICHE.COM - Tienda de Perfumes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f8f8;
      color: #333;
    }

    header {
      background-color: #000;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .bienvenida {
      background: url('./img/marble.jpg') no-repeat center center;
      background-size: cover;
      padding: 60px 20px;
      text-align: center;
      color: white;
    }

    .bienvenida h1 {
      font-size: 2em;
      margin-bottom: 10px;
    }

    .bienvenida p {
      max-width: 700px;
      margin: auto;
      font-size: 1.1em;
      line-height: 1.6;
    }

    .categorias {
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 40px 20px;
    }

    .categoria-btn {
      border: none;
      background-color: transparent;
      text-align: center;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .categoria-btn:hover {
      transform: scale(1.05);
    }

    .categoria-btn img {
      width: 200px;
      border-radius: 10px;
    }

    .categoria-btn h3 {
      margin-top: 10px;
      color: #b30000;
    }

    footer {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Encabezado -->
  <header>
    <h1>SOYFETICHE.COM</h1>
    <p>La mejor selección de fragancias</p>
  </header>

  <!-- Categorías como botones -->
  <section class="categorias">
    <button class="categoria-btn">
      <img src="img/FEM1.png" alt="Perfume Femenino">
      <li><a href="catalogo.html">Perfumes Femeninos</a></li>
    </button>
    <button class="categoria-btn">
      <img src="img/MAN1.png" alt="Perfume Masculino">
      <li><a href="index2.html">Perfumes Masculinos</a></li>
    </button>
  </section>

  <!-- Más popular con carrusel -->
  <section class="mas-popular py-5 bg-light">
    <div class="container">
      <h2 class="text-center text-danger mb-4">Más popular</h2>

      <div id="carouselPopular" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="d-flex justify-content-center">
              <div class="text-center">
                <img src="img/FEM2.png" class="d-block w-100 rounded" style="max-width: 300px;" alt="La Vie Est Belle">
                <h5 class="mt-3 text-danger">La Vie Est Belle</h5>
                <p class="text-muted">Elegancia floral</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              <div class="text-center">
                <img src="img/MAN2.png" class="d-block w-100 rounded" style="max-width: 300px;" alt="Miss Dior">
                <h5 class="mt-3 text-danger">Miss Dior</h5>
                <p class="text-muted">Romántico y moderno</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              <div class="text-center">
                <img src="img/missdior1.webp" class="d-block w-100 rounded" style="max-width: 300px;" alt="Chanel No.5">
                <h5 class="mt-3 text-danger">Chanel No.5</h5>
                <p class="text-muted">Clásico eterno</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              <div class="text-center">

</body>
</html>
