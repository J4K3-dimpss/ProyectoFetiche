<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Créditos del Proyecto</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
    }

    /* Barra superior */
    .top-bar {
      background-color: crimson;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      color: white;
    }

    .top-bar img {
      height: 50px;
    }

    .logout-btn {
      background-color: black;
      color: white;
      padding: 6px 12px;
      font-size: 0.75rem;
      border: none;
      border-radius: 4px;
      text-decoration: none;
    }

    /* Layout principal */
    .main-container {
      display: flex;
      height: calc(100vh - 80px);
    }

    /* Menú lateral */
    .sidebar {
      background-color: crimson;
      width: 200px;
      padding: 1rem;
      color: white;
    }

    .sidebar nav ul {
      list-style: none;
      padding: 0;
    }

    .sidebar nav ul li a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 0.75rem;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }

    /* Contenido principal */
    .content {
      flex-grow: 1;
      padding: 2rem;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    table {
      width: 80%;
      margin: 0 auto;
      border-collapse: collapse;
      background-color: #fff;
      font-size: 14px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 10px 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #3498db;
      color: white;
    }

    tr:hover {
      background-color: #f0f8ff;
    }

    td strong {
      color: #2c3e50;
    }

    /* Botón App Fetiche */
    .btn-app-fetiche {
      background-color: #3498db;
      color: white;
      padding: 10px 20px;
      font-size: 14px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 6px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      transition: background-color 0.3s ease;
    }

    .btn-app-fetiche:hover {
      background-color: #2980b9;
    }

    .btn-container {
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <!-- Barra superior -->
  <div class="top-bar">
    <img src="<?= base_url('img/fetichelogo.png') ?>" alt="Logo">
    <span style="font-family: 'Montserrat', sans-serif; font-weight: bold;">Bienvenido a Registro Perfumes</span>
    <a href="<?= base_url('logout') ?>" class="logout-btn">Cerrar sesión</a>
  </div>

  <!-- Contenedor principal -->
  <div class="main-container">

    <!-- Menú lateral -->
    <div class="sidebar">
      <div style="text-align: center; margin-bottom: 2rem;">
        <div style="width: 60px; height: 60px; background-color: lightgray; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
          <span style="font-size: 2rem; color: black;">👤</span>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="<?= base_url('creditos') ?>">🏠 Inicio</a></li>
          <li><a href="<?= base_url('perfumes') ?>">📃 Inventario</a></li>
          <li><a href="<?= base_url('usuarios') ?>">👥 Usuarios</a></li>
          <li><a href="<?= base_url('ventas') ?>">🛍 Ordenes</a></li>
          <li><a href="<?= base_url('generos') ?>">📑 Categoría</a></li>
        </ul>
      </nav>
    </div>

    <!-- Contenido principal -->
    <div class="content">
      <h2>Créditos del Proyecto</h2>
      <table>
        <thead>
          <tr>
            <th>Colaborador</th>
            <th>Responsabilidades</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Natalie Valeria Aguilar Leal</strong></td>
            <td>Login, Migraciones, Seeders, CRUD usuarios, Modificación de contraseña</td>
          </tr>
          <tr>
            <td><strong>Andy Giselle Andrino Aquino</strong></td>
            <td>CRUD recibos, Documentación, Login</td>
          </tr>
          <tr>
            <td><strong>Justin Daniel Rodas Salaz</strong></td>
            <td>CRUD productos, Documentación, Stock</td>
          </tr>
          <tr>
            <td><strong>Emily Sofía Martínez Pozuelo</strong></td>
            <td>CRUD Categorías, Modificación de contraseñas, Documentación, CRUD productos</td>
          </tr>
        </tbody>
      </table>

      <!-- Botón App Fetiche -->
      <div class="btn-container">
        <a href="<?= base_url('inicio') ?>" class="btn-app-fetiche">App Fetiche</a>
      </div>
    </div>

  </div>

</body>
</html>