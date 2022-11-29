<?php
include('entidades/categoria_gastos.php');
include('datos/dt_categoria_gastos.php');

$dt_cat_gastos = new DtCategoriaGastos();

$cat_gasto = $dt_cat_gastos->find_by_id($id_from_url);

$page_title = 'Categoria de Gastos';
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_categoria_gastos.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_categoria_gastos"
            value="<?php echo $cat_gasto->__GET('id_categoria_gastos')?>"/>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" readonly type="text" required name="nombre_categoria"
              value="<?php echo $cat_gasto->__GET('nombre_categoria')?>">
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <input class="form-control" readonly type="text" name="descripcion"
              value="<?php echo $cat_gasto->__GET('descripcion')?>">
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
