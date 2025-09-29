<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Géneros registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Géneros registrados</h2>

    <?php if (!empty($generos)): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Género</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($generos as $g): ?>
                    <tr>
                        <td><?= $g['id_genero'] ?></td>
                        <td><?= $g['descripcion'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">No hay géneros registrados en la base de datos.</div>
    <?php endif; ?>
</div>
</body>
</html>