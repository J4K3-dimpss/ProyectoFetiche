<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOMBRES</title>
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
      gap: 87px;
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
  <button class="producto-btn" onclick="window.location.href='<?= base_url('Sauvagecarrusel.html') ?>'">
    <img src="<?= base_url('img/Sauvage.png') ?>" alt="Sauvage">
    <h3>Sauvage Eau De Parfum</h3>
    <p>DIOR</p>
    <p>Q 1,599.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('Pololbelcarrusel.html') ?>'">
    <img src="<?= base_url('img/Polo lbel.png') ?>" alt="Polo Live L'bel">
    <h3>Polo Live L'bel</h3>
    <p>Polo</p>
    <p>Q 499.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('Hollistercarrusel.html') ?>'">
    <img src="<?= base_url('img/Hollister california.png') ?>" alt="Hollister California">
    <h3>Hollister California</h3>
    <p>Hollister</p>
    <p>Q 539.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('Ralphlaurenpolo.html') ?>'">
    <img src="<?= base_url('img/ralph lauren polo back.png') ?>" alt="Ralph Lauren Polo Black">
    <h3>Ralph Lauren Polo Black</h3>
    <p>Ralph Lauren</p>
    <p>Q 999.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('Ckbe.html') ?>'">
    <img src="<?= base_url('img/Ck be.png') ?>" alt="Ck Be">
    <h3>Ck Be</h3>
    <p>Calvin Klein</p>
    <p>Q 625.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('LouisVcarru.html') ?>'">
    <img src="<?= base_url('img/Lv nuit.png') ?>" alt="Louis Vuitton Nuit De Feu">
    <h3>Louis Vuitton Nuit De Feu</h3>
    <p>LOUIS VUITTON</p>
    <p>Q 3,349.00</p>
  </button>
</div>

<!-- Fila 2 -->
<div class="fila-catalogo">
  <button class="producto-btn" onclick="window.location.href='<?= base_url('Hgbossunlimited.html') ?>'">
    <img src="<?= base_url('img/Hg boss bottled night .png') ?>" alt="Hugo Boss Bottled Night">
    <h3>Hugo Boss Bottled Night</h3>
    <p>Hugo Boss</p>
    <p>Q 899.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('Hgbosssport.html') ?>'">
    <img src="<?= base_url('img/Hg boss sport.png') ?>" alt="Hugo Boss Sport">
    <h3>Hugo Boss Sport</h3>
    <p>Hugo Boss</p>
    <p>Q 749.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('versacecarru.html') ?>'">
    <img src="<?= base_url('img/Versace eros.png') ?>" alt="Versace Eros Eau Parfum">
    <h3>Versace Eros Eau Parfum</h3>
    <p>Versace</p>
    <p>Q 1,399.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('YvesSaint.html') ?>'">
    <img src="<?= base_url('img/yls saint laurent.webp') ?>" alt="Yves Saint Laurent Eau Parfum">
    <h3>Yves Saint Laurent Eau Parfum</h3>
    <p>Yves Saint Laurent</p>
    <p>Q 1,699.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('HgbossNight.html') ?>'">
    <img src="<?= base_url('img/Hg boss unlimited.jpg') ?>" alt="Hugo Boss Unlimited">
    <h3>Hugo Boss Unlimited</h3>
    <p>Hugo Boss</p>
    <p>Q 1,099.00</p>
  </button>

  <button class="producto-btn" onclick="window.location.href='<?= base_url('Versaceenergycarru.html') ?>'">
    <img src="<?= base_url('img/versace eros energy.avif') ?>" alt="Versace Eros Energy">
    <h3>Versace Eros Energy</h3>
    <p>Versace</p>
    <p>Q 899.00</p>
  </button>
</div>
 
 
 
  </div>
 
</body>
</html>
 
</body>
</html>