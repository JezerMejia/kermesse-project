<?php
include('datos/dt_rol.php');
include('datos/dt_usuario.php');
$page_title = 'Agregar Rol Usuario';
$dt_rol = new DtRol();
$dt_usuario = new DtUsuario();

$roles = $dt_rol->get_data();
$usuarios = $dt_usuario->get_data();
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
            <input class="form-control form-control-solid" type="number" placeholder="ID" disabled />
          </div>

          <div class="mb-3">
            <label>Usuario</label>
            <select class="form-control">
              <?php foreach ($usuarios as $usuario) : ?>
                <option><?php echo ($usuario->__GET('usuario')) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Rol</label>
            <select class="form-control">
              <?php foreach ($roles as $rol) : ?>
                <option><?php echo ($rol->__GET('descripcion')) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="button">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>

        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>
