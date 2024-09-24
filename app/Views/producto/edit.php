<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($producto); ?>
        <h2>Actualizar Porducto</h2>
    <form action="<?=base_url('producto/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="producto" class="form-label">Producto</label>
            <input name="producto" type="text" value="<?=$producto[0]->producto; ?>"
                 class="form-control" id="producto" placeholder="Porducto">
           <input type="hidden" name="idproducto" value="<?=$producto[0]->idproducto;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
        </form>
    
    </div>
    </div>
</div>