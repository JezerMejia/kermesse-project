<?php
include_once('entidades/rol_opcion.php');
include_once('datos/dt_rol.php');
include_once('datos/dt_opcion.php');
$page_title = 'Agregar Rol Opcion ';
$dt_rol = new DtRol();
$dt_opcion = new DtOpcion();
$roles = $dt_rol->get_data();
$opciones = $dt_opcion->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_rol_opcion.php" method="POST">

          <div class="mb-3">
            <label>Rol</label>
            <select class="form-control" name="id_rol">
              <?php foreach ($roles as $rol) : ?>
                <option value="<?php echo $rol->__GET('id_rol') ?>">
                  <?php echo ($rol->__GET('descripcion')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Opcion</label>
            <select class="form-control" name="id_opcion">
              <?php foreach ($opciones as $opcion) : ?>
                <option value="<?php echo $opcion->__GET('id_opcion') ?>">
                  <?php echo ($opcion->__GET('descripcion')) ?>
                </option>
              <?php endforeach; ?>
            </select>
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

