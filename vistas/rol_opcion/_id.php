<?php
include_once('entidades/rol_opcion.php');
include_once('datos/dt_rol_opcion.php');
include_once('datos/dt_rol.php');
include_once('datos/dt_opcion.php');

$dt_rol_opcion = new DtRolOpcion();
$dt_rol = new DtRol();
$dt_opcion = new DtOpcion();

$rol_opcion = $dt_rol_opcion->find_by_id($id_from_url);
$rol =$dt_rol->find_by_id($rol_opcion->__GET("id_rol"));
$opcion =$dt_opcion->find_by_id($rol_opcion->__GET("id_opcion"));

$page_title = 'Rol Opcion';
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
            <input class="form-control" readonly type="number" name="id_rol_opcion"
              value="<?php echo $rol_opcion->__GET('id_rol_opcion')?>"/>
          </div>

          <div class="mb-3">
            <label>Rol</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $rol->__GET('descripcion')?>"/>
          </div>

          <div class="mb-3">
            <label>Opcion</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $opcion->__GET('descripcion')?>"/>
          </div>

          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
