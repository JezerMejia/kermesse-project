<?php
include_once('entidades/producto.php');
include_once('datos/dt_comunidad.php');
include_once('datos/dt_categoria_productos.php');
$page_title = 'Agregar Producto ';
$dt_comunidad = new DtComunidad();
$dt_cat_producto = new DtCategoriaProductos();
$comunidades = $dt_comunidad->get_data();
$categorias = $dt_cat_producto->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_producto.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input required class="form-control" type="number" name="ID">
          </div>

          <div class="mb-3">
            <label>Comunidad</label>
            <select class="form-control" name="id_comunidad">
              <?php foreach ($comunidades as $comunidad) : ?>
                <option value="<?php echo $comunidad->__GET('id_comunidad') ?>">
                  <?php echo ($comunidad->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Categoria Producto</label>
            <select class="form-control" name="id_cat_producto">
              <?php foreach ($categorias as $categoria_producto) : ?>
                <option value="<?php echo $categoria_producto->__GET('id_categoria_producto') ?>">
                  <?php echo ($categoria_producto->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input required class="form-control" type="text" name="nombre">
          </div>

          <div class="mb-3">
            <label>Descripcion</label>
            <input required class="form-control" type="text" name="descripcion">
          </div>

          <div class="mb-3">
            <label>Cantidad</label>
            <input required class="form-control" type="number" name="cantidad">
          </div>

          <div class="mb-3">
            <label>Precio Sugerido</label>
            <input required class="form-control" type="number" name="preciov_sugerido">
          </div>

          <input name="estado" type="hidden" value="1">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>

        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>

