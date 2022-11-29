<?php
include('entidades/producto.php');
include('datos/dt_producto.php');
include('datos/dt_comunidad.php');
include('datos/dt_categoria_productos.php');

$dt_producto = new DtProducto();
$dt_comunidad = new DtComunidad();
$dt_cat_producto = new DtCategoriaProductos();


$producto = $dt_producto->find_by_id($id_from_url);
$id_comunidad = $producto->__GET("id_comunidad");
$id_categoria = $producto->__GET("id_cat_producto");

$comunidades = $dt_comunidad->get_data();
$categorias = $dt_cat_producto->get_data();

$page_title = 'Editar Producto';
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
            <input class="form-control" readonly name="id_producto" type="text"
              value="<?php echo $producto->__GET('id_producto') ?>"/>
          </div>

          <div class="mb-3">
            <label>Comunidad</label>
            <select class="form-control" name="id_comunidad">
              <?php foreach ($comunidades as $comunidad) : ?>
                <?php
                  $ker_id = $comunidad->__GET('id_comunidad');
                  $ker_name = $comunidad->__GET('nombre');
                ?>
                <option value="<?php echo $ker_id?>"
                  <?php echo ($id_comunidad == $ker_id) ? "selected" : ""?>>
                  <?php echo ($ker_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Categoria Producto</label>
            <select class="form-control" name="id_cat_producto">
              <?php foreach ($categorias as $categoria) : ?>
                <?php
                  $cat_id = $categoria->__GET('id_categoria_producto');
                  $cat_desc = $categoria->__GET('nombre');
                ?>
                <option value="<?php echo $cat_id ?>"
                  <?php echo ($id_categoria == $cat_id) ? "selected" : ""?>>
                  <?php echo $cat_desc ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>


          <div class="mb-3">
            <label>Nombre</label>
            <input required class="form-control" type="text" name="nombre"
              value="<?php echo $producto->__GET('nombre') ?>">
          </div>

          <div class="mb-3">
            <label>Descripcion</label>
            <input required class="form-control" type="text" name="descripcion"
              value="<?php echo $producto->__GET('descripcion') ?>">
          </div>

          <div class="mb-3">
            <label>Cantidad</label>
            <input required class="form-control" type="text" name="cantidad"
              value="<?php echo $producto->__GET('cantidad') ?>">
          </div>

          <div class="mb-3">
            <label>Precio Sugerido</label>
            <input required class="form-control" type="text" name="preciov_sugerido"
              value="<?php echo $producto->__GET('preciov_sugerido') ?>">
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>

