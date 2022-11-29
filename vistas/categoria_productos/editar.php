<?php
include('entidades/categoria_productos.php');
include('datos/dt_categoria_productos.php');

$dt_cat_prods = new DtCategoriaProductos();

$cat_prod = $dt_cat_prods->find_by_id($id_from_url);

$page_title = 'Editar Categoria de Productos';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_categoria_productos.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_categoria_producto"
              value="<?php echo $cat_prod->__GET('id_categoria_producto')?>"/>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre"
              value="<?php echo $cat_prod->__GET('nombre') ?>">
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion"
              value="<?php echo $cat_prod->__GET('descripcion') ?>">
          </div>

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
