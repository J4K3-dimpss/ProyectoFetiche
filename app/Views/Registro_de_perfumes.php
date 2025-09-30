<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<img src="<?= base_url('img/fetichelogo.png') ?>" width="300" height="auto">
<!-- Barra horizontal roja -->
<div style="background-color: crimson; height: 80px; width: 120%;  display: flex; align-items: center; padding-left: 1rem;">
  <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;">Bienvenido a Registro Perfumes</span>
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
        <li><a href="<?= base_url('genero') ?>" style="color: white; text-decoration: none; display: block; padding: 0.75rem; font-family: 'Montserrat', sans-serif;font-weight: bold;">📑 Categoría</a></li>
      </ul>
    </nav>
  </div>
  
<div class="container mt-4">
    <h2 class="mb-4">Perfumes registrados</h2>
    <!-- 🔘 Botón para agregar nuevo perfume -->
    <div class="d-flex justify-content-end mb-3">
        <a href="<?= base_url('perfumes/nuevo') ?>" class="btn btn-success btn-sm">
            + Agregar nuevo perfume
        </a>
    </div>

    <!-- 🔘 Botón de impresión -->
<div class="d-flex justify-content-end mb-3">
    <button class="btn btn-dark btn-sm" onclick="window.print()">
        🖨️ Imprimir inventario
    </button>
</div>

    <?php if (!empty($perfumes)): ?>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Género</th>
                <th>Marca</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($perfumes as $p): ?>
                <tr>
                    <td><?= $p['id_perfume'] ?></td>
                    <td><?= $p['nombre'] ?></td>
                    <td>
                        <?php
                        foreach ($generos as $g) {
                            if ($g['id_genero'] == $p['id_genero']) {
                                echo $g['descripcion'];
                                break;
                            }
                        }
                        ?>
                    </td>
                    <td><?= $p['marca'] ?></td>
                    <td><?= $p['descripcion'] ?></td>
                    <td>Q<?= number_format($p['precio'], 2) ?></td>
                    <!-- ✅ Botones de acción -->
        <td class="text-center">
            <!-- Botón Actualizar -->
            <a href="<?= base_url('perfumes/editar/' . $p['id_perfume']) ?>"
               class="btn btn-sm"
               style="background-color: #8B0000; color: white; border-radius: 0; padding: 6px 12px;">
                ✏️
            </a>

            <!-- Botón Eliminar -->
            <a href="<?= base_url('perfumes/eliminarPerfume/' . $p['id_perfume']) ?>"
               class="btn btn-sm"
               style="background-color: #ff69b4; color: white; border-radius: 0; padding: 6px 12px;"
               onclick="return confirm('¿Estás segura de que quieres eliminar este perfume?')">
                🗑️
            </a>
        </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-warning">No hay perfumes registrados en la base de datos.</div>
    <?php endif; ?>
</div>
</body>
</html>