<!-- add.php -->
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Agregar producto</h2>
            <?= validation_list_errors() ?>

            <form action="<?=base_url('producto/insert'); ?>" method = "POST">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

            <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" 
            class="form-control" id="nombre"
            required
            placeholder="Nombre" value="<?= set_value('nombre') ?>" >
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input name="precio" type="text" 
            class="form-control" id="precio"
            required
            placeholder="Precio" value="<?= set_value('precio') ?>" >
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input name="stock" type="text" 
            class="form-control" id="stock"
            required
            placeholder="Stock" value="<?= set_value('stock') ?>" >
        </div>


        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input name="descripcion" type="text" 
            class="form-control" id="descripcion "
            required
            placeholder="Descripcion" value="<?= set_value('descripcion') ?>" >
        </div>

            <input type="submit" class = "btn btn-success nt-3" name="Guardar" value = "Guardar" > 
            </form>
        </div>
    </div>
</div>