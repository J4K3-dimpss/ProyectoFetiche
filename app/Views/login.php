<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio sesión Fetiche</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8f9fa;
    }
    .form-box {
      max-width: 400px;
      margin: 60px auto;
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
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

  <div class="container">
    <div class="text-center mt-4">
      <img src="<?= base_url('img/fetichelogo.png') ?>" alt="Logo Fetiche" style="max-width: 200px;">
    </div>

    <div class="form-box">
      <h2>Inicio de sesión</h2>

      <?php if(session('mensaje')): ?>
        <div class="alert alert-danger text-center">
          <?= session('mensaje') ?>
        </div>
      <?php endif; ?>

      <form action="<?= base_url('login/verificar') ?>" method="post">
        <div class="mb-3">
          <label for="correo" class="form-label">Correo Electrónico</label>
          <input type="email" name="nombre_usuario" class="form-control" placeholder="Ingresa correo" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="contraseña" class="form-control" placeholder="Ingresa tu contraseña" required>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4">
          <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
          <a href="<?= base_url('/') ?>" class="btn btn-secondary btn-lg">Cerrar</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>