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
          <a class="nav-link active" aria-current="page" href="<?= base_url('catalogo') ?>">Inicio</a>
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

  </div>
</div>
<div class="container">
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Miss Dior Le Parfum Dior</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 40px;
      background-color: #fff;
    }

    .container {
      display: flex;
      max-width: 1000px;
      margin: auto;
    }

    .left-column {
      flex: 1;
      padding-right: 30px;
    }

    .right-column {
      flex: 1;
      position: relative;
    }

    h1 {
      font-size: 32px;
      font-weight: bold;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
    }

    .product-info {
      margin-top: 30px;
    }

    .product-info label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }

    .product-info input {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .category-button {
      margin-top: 10px;
    }

    .category-button button {
      padding: 10px 20px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
    }

    .actions {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .actions button {
      padding: 10px 15px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      flex-grow: 1;
      min-width: 120px;
    }

    /* Carrusel */
    .carousel {
      position: relative;
      width: 100%;
      overflow: hidden;
      border-radius: 10px;
    }

    .carousel-images {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carousel-images img {
      width: 100%;
      border-radius: 10px;
      flex-shrink: 0;
    }

    .carousel-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-size: 18px;
      z-index: 1;
    }

    .prev {
      left: 10px;
    }

    .next {
      right: 10px;
    }
  </style>  
</head>
<body>
  <div class="container">
    <div class="left-column">
      <h1>Miss Dior Rose N’Roses</h1>
      <p><strong>Un estallido de rosas y frescura</strong></p>
      <p>Es una fragancia vibrante y luminosa que captura la intensidad de un campo infinito de flores en plena primavera.</p>
      <p>Un perfume alegre, chispeante y lleno de energía que celebra la feminidad moderna.</p>
      
      <div class="product-info">
        <label for="stock">Registros del producto</label>
        <input type="text" id="stock" value="1,500 perfumes en existencia">

        <label for="price">Precio</label>
        <input type="text" id="price" value="Q.499">

        <label for="store">Tienda</label>
        <input type="text" id="store" value="23 calle 10-30 zona 4 de Mixco, Ciudad de Guatemala 01057, Guatemala">

        <div class="category-button">
          <label>Categoría</label>
          <button>Femenino</button>
        </div>
      </div>

      <div class="actions">
        <button onclick="agregarAlCarrito()">Agregar a la compra</button>
        <button onclick="mostrarFactura()">Finalizar compra</button>
      </div>
    </div>

    <div class="right-column">
      <div class="carousel">
        <div class="carousel-images" id="carouselImages">
          <img src="img/Missdiorroses1.webp" alt="Imagen 1">
          <img src="img/Missdiorroses2.png" alt="Imagen 2">
          <img src="img/Missdiorroses3.png" alt="Imagen 3">
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">❮</button>
        <button class="carousel-button next" onclick="nextSlide()">❯</button>
      </div>
    </div>
  </div>

  <!-- Modal de Factura -->
<div id="facturaModal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
  <div style="background:#fff; padding:30px; border-radius:10px; max-width:400px; margin:auto; position:relative;">
    <h2>Factura</h2>
    <div id="facturaContenido"></div>
    <button onclick="cerrarFactura()" style="margin-top:20px;">Cerrar</button>
  </div>
</div>

  <script>
    let currentIndex = 0;

    function showSlide(index) {
      const carouselImages = document.getElementById('carouselImages');
      const totalImages = carouselImages.children.length;

      if (index >= totalImages) currentIndex = 0;
      else if (index < 0) currentIndex = totalImages - 1;
      else currentIndex = index;

      const offset = -currentIndex * 100;
      carouselImages.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
      showSlide(currentIndex + 1);
    }

    function prevSlide() {
      showSlide(currentIndex - 1);
    }

    // Carrito de compras
    function agregarAlCarrito() {
      const producto = {
        nombre: "Miss Dior Rose N’Roses",
        descripcion: "Un estallido de rosas y frescura",
        cantidad: 1,
        precio: 499.00,
        tienda: "23 calle 10-30 zona 4 de Mixco, Ciudad de Guatemala 01057, Guatemala",
        categoria: "Femenino"
      };
      localStorage.setItem('carrito', JSON.stringify([producto]));
      alert('Producto agregado al carrito.');
    }

    function mostrarFactura() {
      const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
      if (carrito.length === 0) {
        alert('El carrito está vacío.');
        return;
      }
      let total = 0;
      let html = '<table style="width:100%; border-collapse:collapse;">';
      html += '<tr><th style="text-align:left;">Producto</th><th>Cantidad</th><th>Precio</th></tr>';
      carrito.forEach(item => {
        html += `<tr>
          <td>${item.nombre}</td>
          <td style="text-align:center;">${item.cantidad}</td>
          <td style="text-align:right;">Q ${item.precio.toFixed(2)}</td>
        </tr>`;
        total += item.precio * item.cantidad;
      });
      html += `<tr>
        <td colspan="2" style="text-align:right;"><strong>Total:</strong></td>
        <td style="text-align:right;"><strong>Q ${total.toFixed(2)}</strong></td>
      </tr>`;
      html += '</table>';
      html += `<p><strong>Tienda:</strong> ${carrito[0].tienda}</p>`;
      html += `<p><strong>Categoría:</strong> ${carrito[0].categoria}</p>`;
      document.getElementById('facturaContenido').innerHTML = html;
      document.getElementById('facturaModal').style.display = 'flex';
      localStorage.removeItem('carrito');
    }

    function cerrarFactura() {
      document.getElementById('facturaModal').style.display = 'none';
    }
  </script>
</body>
</html>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>