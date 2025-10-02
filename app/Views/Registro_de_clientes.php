<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Barra horizontal roja -->
<div style="background-color: crimson; height: 80px; width: 120%;  display: flex; align-items: center; padding-left: 1rem;">
  <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;">Bienvenido a Registro Clientes</span>
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
        <li><a href="<?= base_url('creditos') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">🏠 Inicio</a></li>
        <li><a href="<?= base_url('perfumes') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📃 Inventario</a></li>
        <li><a href="<?= base_url('usuarios') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">👥 Usuarios</a></li>
        <li><a href="<?= base_url('ventas') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif; font-weight: bold;">🛍 Ordenes</a></li>
        <li><a href="<?= base_url('generos') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📑 Categoría</a></li>
    </nav>
  </div>
<div class="container mt-4">
    <h2 class="mb-4">Clientes registrados</h2>

    <?php if (!empty($clientes)): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $c): ?>
                    <tr>
                        <td><?= $c['id_cliente'] ?></td>
                        <td><?= $c['nombre'] ?></td>
                        <td><?= $c['apellido'] ?></td>
                        <td><?= $c['correo'] ?></td>
                        <td><?= $c['telefono'] ?></td>
                        <!-- ✅ Botones de acción -->
                         <?php if (session('rol') === 'admin'): ?>
    <!-- Botones aquí -->

                         
        <td class="text-center">
            <!-- Botón Actualizar -->
            <a href="<?= base_url('clientes/editar/' . $c['id_cliente']) ?>"
               class="btn btn-sm"
               style="background-color: #8B0000; color: white; border-radius: 0; padding: 6px 12px;">
                ✏️
            </a>

            <!-- Botón Eliminar -->
            <a href="<?= base_url('clientes/eliminar/' . $c['id_cliente']) ?>"
               class="btn btn-sm"
               style="background-color: #ff69b4; color: white; border-radius: 0; padding: 6px 12px;"
               onclick="return confirm('¿Estás segura de que quieres eliminar este cliente?')">
                🗑️
            </a>
        </td>
        <?php endif; ?>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">No hay clientes registrados en la base de datos.</div>
    <?php endif; ?>
</div>
</body>
</html>