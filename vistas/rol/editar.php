<?php
include('entidades/rol.php');
include('datos/dt_rol.php');

$dt_rol = new DtRol();

$rol = $dt_rol->find_by_id($id_from_url);

$page_title = 'Editar Rol';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_rol.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_rol"
              value="<?php echo $rol->__GET('id_rol')?>"/>
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion"
            value="<?php echo $rol->__GET('descripcion')?>">
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
