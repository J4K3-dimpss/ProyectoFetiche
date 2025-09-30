<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUJERES</title>
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
          <a class="nav-link active" aria-current="page" href="inicio.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Iniciar sesión.html">Iniciar sesión</a>
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Perfumes</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
    }

    header {
      background-color: #222;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .contenedor-catalogo {
      display: flex;
      flex-direction: column;
      gap: 30px;
      padding: 20px;
    }

    .fila-catalogo {
      display: flex;
      overflow-x: auto;
      gap: 20px;
    }

    .producto-btn {
      flex: 0 0 auto;
      width: 200px;
      background-color: #fff0f5;
      border: none;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .producto-btn:hover {
      transform: scale(1.05);
    }

    .producto-btn img {
      width: 100%;
      height: auto;
      border-radius: 12px;
    }

    .producto-btn h3 {
      margin: 10px 0 5px;
      font-size: 1.1em;
      color: #b30000;
    }

    .producto-btn p {
      font-size: 0.9em;
      color: #555;
    }

    .fila-catalogo::-webkit-scrollbar {
      height: 8px;
    }

    .fila-catalogo::-webkit-scrollbar-thumb {
      background-color: #ccc;
      border-radius: 4px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Fetiche - Catálogo de Perfumes</h1>
    <p>Sofisticada, sensual y elegante</p>
  </header>

  <div class="contenedor-catalogo">

   <!-- Fila 1 -->
<div class="fila-catalogo">
  <button class="producto-btn" onclick="window.location.href='<?= base_url('envy') ?>'">
    <img src="<?= base_url('img/PERFUME1.png') ?>" alt="Envy">
    <h3>L'adore Infinissime</h3>
    <p>DIOR</p>
    <p>Q. 900</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('missdiorM') ?>'">
    <img src="<?= base_url('img/PERFUME2.png') ?>" alt="Miss Dior">
    <h3>Miss Dior</h3>
    <p>DIOR</p>
    <p>Q. 1,250</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('chanelcoco') ?>'">
    <img src="<?= base_url('img/PERFUME3.png') ?>" alt="Chanel No.5">
    <h3>Chanel No.5</h3>
    <p>CHANEL</p>
    <p>Q. 1,200</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('missdior') ?>'">
    <img src="<?= base_url('img/missdior3.png') ?>" alt="Dior No.5">
    <h3>Dior No.5</h3>
    <p>DIOR</p>
    <p>Q. 1,800</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('myburberry') ?>'">
    <img src="<?= base_url('img/PERFUME7.png') ?>" alt="My Burberry">
    <h3>MY BURBERRY</h3>
    <p>BURBERRY</p>
    <p>Q. 1,899</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('212forher') ?>'">
    <img src="<?= base_url('img/PERFUME8.png') ?>" alt="212 Heroes For Her">
    <h3>212 Heroes For Her</h3>
    <p>CAROLINA HERRERA</p>
    <p>Q. 649</p>
  </button>
</div>

<!-- Fila 2 -->
<div class="fila-catalogo">
  <button class="producto-btn" onclick="window.location.href='<?= base_url('coach') ?>'">
    <img src="<?= base_url('img/PERFUME9.png') ?>" alt="Coach">
    <h3>Coach</h3>
    <p>COACH</p>
    <p>Q. 899</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('blooming') ?>'">
    <img src="<?= base_url('img/PERFUME5.png') ?>" alt="Blooming Bouquet">
    <h3>Blooming Bouquet</h3>
    <p>DIOR</p>
    <p>Q. 879</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('rose') ?>'">
    <img src="<?= base_url('img/PERFUME6.png') ?>" alt="Rose Des Vents">
    <h3>Rose Des Vents</h3>
    <p>LOUIS VUITTON</p>
    <p>Q. 2,300</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('missdiorroses') ?>'">
    <img src="<?= base_url('img/PERFUME10.png') ?>" alt="Miss Dior Rose N'Roses">
    <h3>Miss Dior Rose N'Roses</h3>
    <p>DIOR</p>
    <p>Q. 499</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('pasione') ?>'">
    <img src="<?= base_url('img/PERFUME11.png') ?>" alt="Si Passione">
    <h3>Si Passione</h3>
    <p>GIORGIO ARMANI</p>
    <p>Q. 1,599</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('ardent') ?>'">
    <img src="<?= base_url('img/PERFUME12.png') ?>" alt="Absolus Allegoria Patchouli Ardent">
    <h3>Absolus Allegoria Patchouli Ardent</h3>
    <p>GUERLAIN</p>
    <p>Q. 1,699</p>
  </button>
</div>


  </div>

</body>
</html>

</body>
</html>
