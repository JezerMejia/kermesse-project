<?php
include('entidades/producto.php');
include('datos/dt_producto.php');
include('datos/dt_comunidad.php');
include('datos/dt_categoria_productos.php');

$dt_producto = new DtProducto();
$dt_comunidad = new DtComunidad();
$dt_cat_producto = new DtCategoriaProductos();

$producto = $dt_producto->find_by_id($id_from_url);
$comunidad =$dt_comunidad->find_by_id($producto->__GET("id_comunidad"));
$categoria =$dt_cat_producto->find_by_id($producto->__GET("id_cat_producto"));

$page_title = 'Producto';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
      <form>
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_producto"
              value="<?php echo $producto->__GET('id_producto')?>"/>
          </div>

          <div class="mb-3">
            <label>Comunidad</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $comunidad->__GET('nombre')?>"/>
          </div>

          <div class="mb-3">
            <label>Cat Producto</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $categoria->__GET('nombre')?>"/> 
          </div>


          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $producto->__GET('nombre')?>"/>
          </div>

          <div class="mb-3">
            <label>Descripcion</label>
            <input class="form-control" readonly type="text" name="descripcion"
              value="<?php echo $producto->__GET('descripcion')?>"/>
          </div>

          <div class="mb-3">
            <label>cantidad</label>
            <input class="form-control" readonly type="number" name="cantidad"
              value="<?php echo $producto->__GET('cantidad')?>"/>
          </div>
          
          <div class="mb-3">
            <label>precio sugerido</label>
            <input class="form-control" readonly type="number" name="preciov_sugerido"
              value="<?php echo $producto->__GET('preciov_sugerido')?>"/>
          </div>

          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
