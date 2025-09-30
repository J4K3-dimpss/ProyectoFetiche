<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="p-5 shadow-lg rounded" style="background-color: white; width: 700px; max-width: 90%;">
            <h2 class="text-center mb-4" style="color: crimson; font-family: 'Montserrat', sans-serif;">
                ✏️ Editar Usuario
            </h2>

            <form action="<?= base_url('usuarios/actualizar') ?>" method="post">
                <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nombre de usuario</label>
                    <input type="text" name="nombre_usuario" class="form-control form-control-lg border border-danger"
                           value="<?= $usuario['nombre_usuario'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña (nueva)</label>
                    <input type="password" name="contrasena" class="form-control form-control-lg border border-danger"
                           placeholder="Dejar en blanco si no se cambia">
                </div>

                <div class="mb-3">
                    <label class="form-label">Rol</label>
                    <select name="rol" class="form-select form-select-lg border border-danger" required>
                        <option value="admin" <?= $usuario['rol'] == 'admin' ? 'selected' : '' ?>>Administrador</option>
                        <option value="vendedor" <?= $usuario['rol'] == 'vendedor' ? 'selected' : '' ?>>Vendedor</option>
                        <option value="cliente" <?= $usuario['rol'] == 'cliente' ? 'selected' : '' ?>>Cliente</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button type="submit" class="btn btn-success btn-lg px-5">💾 Guardar cambios</button>
                    <a href="<?= base_url('usuarios') ?>" class="btn btn-secondary btn-lg px-5">↩️ Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>