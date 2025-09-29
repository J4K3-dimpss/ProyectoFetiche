<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Barra horizontal roja -->
<div style="background-color: crimson; height: 80px; width: 120%;  display: flex; align-items: center; padding-left: 1rem;">
  <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;">Bienvenido a Registro Usuarios</span>
</div>

<!-- Contenedor principal que alinea menú y contenido -->
<div style="display: flex; height: calc(100vh - 80px);">

  <!-- Menú lateral rojo -->
  <div style="background-color: crimson; width: 200px; height: 1100px; padding: 1rem; color: white;">

    <!-- Ícono circular -->
    <div style="text-align: center; margin-bottom: 2rem;">
      <div style="width: 60px; height: 60px; background-color: lightgray; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
        <span style="font-size: 2rem; color: black;">👤</span>
      </div>
    </div>

    <!-- Menú vertical -->
    <nav>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">🏠 Inicio</a></li>
        <li><a href="inventario.html" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📃 Inventario</a></li>
        <li><a href="index.html" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">✏️ Creación</a></li>
        <li><a href="Registro de usuarios.html" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">👥 Usuarios</a></li>
        <li><a href="historial_de_compras.html" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">🛍 Ordenes</a></li>
        <li><a href="categorias.html" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📑 Categoría</a></li>
      </ul>
    </nav>
  </div>
<div class="container mt-4">
    <h2 class="mb-4">Usuarios registrados</h2>

           <!-- 🔘 Botón arriba del buscador -->
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-success btn-sm">
            + Agregar nuevo usuario
        </a>
    </div>

    <?php if (!empty($usuarios)): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Usuario</th>
                    <th>Nombre de usuario</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['id_usuario'] ?></td>
                        <td><?= $u['nombre_usuario'] ?></td>
                        <td><?= ucfirst($u['rol']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">No hay usuarios registrados en la base de datos.</div>
    <?php endif; ?>
</div>
</body>
</html>