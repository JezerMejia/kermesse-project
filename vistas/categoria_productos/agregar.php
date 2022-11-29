<?php
include('entidades/categoria_productos.php');
$page_title = 'Agregar Categoria Productos';

?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_categoria_productos.php" method="POST">
          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre">
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion">
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
