<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Montserrat', sans-serif;
        }
        .form-box {
            max-width: 550px;
            margin: 60px auto;
            background-color: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2c4ec0ff;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-custom {
            padding: 10px 20px;
            font-size: 0.9rem;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>✏️ Editar usuario</h2>
    <form action="<?= base_url('usuarios/modificar') ?>" method="post">
        <input type="hidden" name="txt_id" value="<?= $datosUsuario['id_usuario'] ?>">

        <div class="mb-3">
            <label for="txt_nombre" class="form-label">📧 Correo electrónico</label>
            <input type="email" name="txt_nombre" class="form-control" value="<?= $datosUsuario['nombre_usuario'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="txt_contraseña" class="form-label">🔒 Nueva contraseña <small class="text-muted">(opcional)</small></label>
            <input type="password" name="txt_contraseña" class="form-control" placeholder="Dejar vacío para no cambiar">
        </div>

        <div class="mb-3">
            <label for="txt_rol" class="form-label">👤 Rol</label>
            <select name="txt_rol" class="form-select" required>
                <option value="admin" <?= $datosUsuario['rol'] === 'admin' ? 'selected' : '' ?>>Administrador</option>
                <option value="vendedor" <?= $datosUsuario['rol'] === 'vendedor' ? 'selected' : '' ?>>Vendedor</option>
                <option value="cliente" <?= $datosUsuario['rol'] === 'cliente' ? 'selected' : '' ?>>Cliente</option>
            </select>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="<?= base_url('usuarios') ?>" class="btn btn-secondary btn-custom">Cancelar</a>
            <button type="submit" class="btn btn-warning btn-custom">💾 Actualizar</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>