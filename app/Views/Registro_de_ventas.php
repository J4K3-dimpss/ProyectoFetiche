<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas registradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Ventas registradas</h2>

    <?php if (!empty($ventas)): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Venta</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
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