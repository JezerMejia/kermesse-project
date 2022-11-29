<?php
include('entidades/rol_usuario.php');
include('datos/dt_rol_usuario.php');
include('datos/dt_rol.php');
include('datos/dt_usuario.php');

$dt_rol_usuario = new DtRolUsuario();
$dt_rol = new DtRol();
$dt_usuario = new DtUsuario();

$rol_usuario = $dt_rol_usuario->find_by_id($id_from_url);
$ru_id_rol = $rol_usuario->__GET('id_rol');
$ru_id_usuario = $rol_usuario->__GET('id_usuario');

$rol = $dt_rol->find_by_id($ru_id_rol);
$usuario = $dt_usuario->find_by_id($ru_id_usuario);

$page_title = 'Rol Usuario';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_rol_usuario.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_rol_usuario"
              value="<?php echo $rol_usuario->__GET('id_rol_usuario')?>"/>
          </div>

          <div class="mb-3">
            <label>Usuario</label>
            <input class="form-control" readonly type="text" name="id_usuario"
              value="<?php echo $usuario->__GET('usuario')?>"/>
          </div>

          <div class="mb-3">
            <label>Rol</label>
            <input class="form-control" readonly type="text" name="id_rol"
              value="<?php echo $rol->__GET('descripcion')?>"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
