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

$roles = $dt_rol->get_data();
$usuarios = $dt_usuario->get_data();

$page_title = 'Editar Rol Usuario';
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
            <select class="form-control" name="id_usuario">
              <?php foreach ($usuarios as $usuario) : ?>
                <?php
                  $user_id = $usuario->__GET('id_usuario');
                  $user_name = $usuario->__GET('usuario');
                ?>
                <option value="<?php echo $user_id ?>"
                  <?php echo ($ru_id_usuario == $user_id) ? "selected" : ""?>>
                  <?php echo $user_name ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Rol</label>
            <select class="form-control" name="id_rol">
              <?php foreach ($roles as $rol) : ?>
                <?php
                  $rol_id = $rol->__GET('id_rol');
                  $rol_desc = $rol->__GET('descripcion');
                ?>
                <option value="<?php echo $rol_id ?>"
                  <?php echo ($ru_id_rol == $rol_id) ? "selected" : ""?>>
                  <?php echo $rol_desc ?>
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
