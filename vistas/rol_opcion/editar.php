<?php
include_once('entidades/rol_opcion.php');
include_once('datos/dt_rol_opcion.php');
include_once('datos/dt_rol.php');
include_once('datos/dt_opcion.php');

$dt_rol_opcion = new DtRolOpcion();
$dt_rol = new DtRol();
$dt_opcion = new DtOpcion();


$rol_opcion = $dt_rol_opcion->find_by_id($id_from_url);
$id_rol = $rol_opcion->__GET("id_rol");
$id_opcion = $rol_opcion->__GET("id_opcion");

$roles = $dt_rol->get_data();
$opciones = $dt_opcion->get_data();

$page_title = 'Editar Rol Opcion';
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_rol_opcion.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly name="id_rol_opcion" type="text"
              value="<?php echo $rol_opcion->__GET('id_rol_opcion') ?>"/>
          </div>

          <div class="mb-3">
            <label>Rol</label>
            <select class="form-control" name="id_rol">
              <?php foreach ($roles as $rol) : ?>
                <?php
                  $ker_id = $rol->__GET('id_rol');
                  $ker_name = $rol->__GET('descripcion');
                ?>
                <option value="<?php echo $ker_id?>"
                  <?php echo ($id_rol == $ker_id) ? "selected" : ""?>>
                  <?php echo ($ker_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Opcion</label>
            <select class="form-control" name="id_opcion">
              <?php foreach ($opciones as $opcion) : ?>
                <?php
                  $cat_id = $opcion->__GET('id_opcion');
                  $cat_desc = $opcion->__GET('descripcion');
                ?>
                <option value="<?php echo $cat_id ?>"
                  <?php echo ($id_opcion == $cat_id) ? "selected" : ""?>>
                  <?php echo $cat_desc ?>
                </option>
              <?php endforeach; ?>
            </select>
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


