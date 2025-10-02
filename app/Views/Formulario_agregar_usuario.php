<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Montserrat', sans-serif;
        }
        .form-box {
            max-width: 500px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2c4ec0ff;
            font-weight: 700;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Crear nuevo usuario</h2>
    <form action="<?= base_url('usuarios/guardar') ?>" method="post">
        <div class="mb-3">
            <label for="txt_nombre" class="form-label">Correo electrónico</label>
            <input type="email" name="txt_nombre" class="form-control" placeholder="Ej. usuario@fetiche.com" required>
        </div>

        <div class="mb-3">
            <label for="txt_contraseña" class="form-label">Contraseña</label>
            <input type="password" name="txt_contraseña" class="form-control" placeholder="Mínimo 6 caracteres" required>
        </div>

        <div class="mb-3">
            <label for="txt_rol" class="form-label">Rol</label>
            <select name="txt_rol" class="form-select" required>
                <option value="">Selecciona un rol</option>
                <option value="admin">Administrador</option>
                <option value="vendedor">Vendedor</option>
                <option value="vendedor">Cliente</option>
            </select>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="<?= base_url('usuarios') ?>" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar usuario</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>