<div class="container mt-5 mb-5 p-4 shadow rounded" style="background-color: #fefefe; max-width: 700px;">
    <h3 class="text-center mb-4" style="color: crimson; font-family: 'Montserrat', sans-serif;">Registrar nuevo perfume</h3>

    <form action="<?= base_url('perfumes/guardar') ?>" method="post">
        <div class="mb-3">
            <label class="form-label">ID Perfume</label>
            <input type="text" name="txt_id" class="form-control border border-danger" placeholder="Ej. 101" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="txt_nombre" class="form-control border border-danger" placeholder="Ej. J'adore Infinissime" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Género</label>
            <select name="txt_id_genero" class="form-select border border-danger" required>
                <option value="" disabled selected>Selecciona un género</option>
                <?php foreach ($generos as $g): ?>
                    <option value="<?= $g['id_genero'] ?>"><?= $g['descripcion'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="txt_marca" class="form-control border border-danger" placeholder="Ej. Dior">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="txt_descripcion" class="form-control border border-danger" rows="3" placeholder="Notas florales intensas..."></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Precio (Q)</label>
            <input type="number" step="0.01" name="txt_precio" class="form-control border border-danger" placeholder="Ej. 980.00" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-success px-4">💾 Guardar</button>
            <a href="<?= base_url('perfumes') ?>" class="btn btn-secondary px-4">↩️ Cancelar</a>
        </div>
    </form>
</div>
