<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Perfumes registrados</h2>
        <!-- 🔘 Botón arriba del buscador -->
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-success btn-sm">
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