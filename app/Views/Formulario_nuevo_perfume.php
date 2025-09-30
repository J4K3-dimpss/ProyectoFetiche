<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuevo Perfume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 700px;
      margin: 60px auto;
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 25px rgba(0,0,0,0.1);
    }
    h2 {
      color: #198754;
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
    }
    label {
      font-weight: 600;
      color: #333;
    }
    .btn-guardar {
      background-color: #198754;
      color: white;
      border-radius: 8px;
      padding: 10px 30px;
    }
    .btn-cancelar {
      background-color: #6c757d;
      color: white;
      border-radius: 8px;
      padding: 10px 30px;
    }
    .btn-guardar:hover, .btn-cancelar:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>➕ Agregar nuevo perfume</h2>

  <form action="<?= base_url('perfumes/guardar') ?>" method="post">
    <div class="mb-3">
      <label class="form-label">Nombre:</label>
      <input type="text" name="txt_nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Marca:</label>
      <input type="text" name="txt_marca" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Descripción:</label>
      <textarea name="txt_descripcion" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Precio (Q):</label>
      <input type="number" step="0.01" name="txt_precio" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Género:</label>
      <select name="txt_id_genero" class="form-select">
        <?php foreach ($generos as $gen): ?>
          <option value="<?= $gen['id_genero'] ?>"><?= $gen['descripcion'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="d-flex justify-content-center gap-3 mt-4">
      <button type="submit" class="btn btn-guardar">💾 Guardar</button>
      <a href="<?= base_url('perfumes') ?>" class="btn btn-cancelar">↩️ Cancelar</a>
    </div>
  </form>
</div>

</body>
</html>