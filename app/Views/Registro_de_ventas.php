<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas registradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <img src="<?= base_url('img/fetichelogo.png') ?>" width="150" height="auto"><a href="<?= base_url('logout') ?>" class="btn btn-primary"
  style="
    background-color: black;
    color: white;
    --bs-btn-padding-y: .25rem;
    --bs-btn-padding-x: .8rem;
    --bs-btn-font-size: .75rem;
    position: relative;
    left: 1230px;
    top: 1px;
  ">
  Cerrar sesión
</a>
    <!-- Barra horizontal roja -->
<div style="background-color: crimson; height: 80px; width: 120%;  display: flex; align-items: center; padding-left: 1rem;">
  <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;">Bienvenido a Historial de ordenes</span>
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
        <li><a href="<?= base_url('perfumes') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📃 Inventario</a></li>
        <li><a href="index.html" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">✏️ Creación</a></li>
        <li><a href="<?= base_url('usuarios') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">👥 Usuarios</a></li>
        <li><a href="<?= base_url('ventas') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">🛍 Ordenes</a></li>
        <li><a href="<?= base_url('generos') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📑 Categoría</a></li>
      </ul>
    </nav>
  </div>
<div class="container mt-4">
    <h2 class="mb-4">Historial de ordenes</h2>
    <form action="<?= base_url('ventas/buscar') ?>" method="get"
      class="d-flex justify-content-center mb-4"
      style="max-width: 500px; margin: auto;">
  
  <input type="text" name="query" class="form-control me-2"
         placeholder="Buscar por ID o nombre..." required>
  
  <button type="submit" class="btn btn-primary">🔍 Buscar</button>
</form>

    <?php if (!empty($ventas)): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Venta</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $v): ?>
                    <tr>
                        <td><?= $v['id_venta'] ?></td>
                        <td>
                            <?php
                            foreach ($clientes as $c) {
                                if ($c['id_cliente'] == $v['id_cliente']) {
                                    echo $c['nombre'] . ' ' . $c['apellido'];
                                    break;
                                }
                            }
                            ?>
                        </td>
                        <td><?= $v['fecha_venta'] ?></td>
                        <!-- ✅ Botones de acción -->
        <td class="text-center">
            <!-- Botón Actualizar -->
            <a href="<?= base_url('ventas/editar/' . $v['id_venta']) ?>"
               class="btn btn-sm"
               style="background-color: #8B0000; color: white; border-radius: 0; padding: 6px 12px;">
                ✏️
            </a>

            <!-- Botón Eliminar -->
            <a href="<?= base_url('ventas/eliminar/' . $v['id_venta']) ?>"
               class="btn btn-sm"
               style="background-color: #ff69b4; color: white; border-radius: 0; padding: 6px 12px;"
               onclick="return confirm('¿Estás segura de que quieres eliminar esta venta?')">
                🗑️
            </a>
        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">No hay ventas registradas en la base de datos.</div>
    <?php endif; ?>
</div>
</body>
</html>