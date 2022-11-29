<?php
include('datos/dt_rol.php');
include('datos/dt_usuario.php');
$dt_rol = new DtRol();
$dt_usuario = new DtUsuario();

$roles = $dt_rol->get_data();
$usuarios = $dt_usuario->get_data();

$page_title = 'Agregar Rol Usuario';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_rol_usuario.php" method="POST">
          <div class="mb-3">
            <label>Usuario</label>
            <select class="form-control" name="id_usuario">
              <?php foreach ($usuarios as $usuario) : ?>
                <option value="<?php echo $usuario->__GET('id_usuario')?>">
                  <?php echo ($usuario->__GET('usuario')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Rol</label>
            <select class="form-control" name="id_rol">
              <?php foreach ($roles as $rol) : ?>
                <option value="<?php echo $rol->__GET('id_rol')?>">
                  <?php echo ($rol->__GET('descripcion')) ?>
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
