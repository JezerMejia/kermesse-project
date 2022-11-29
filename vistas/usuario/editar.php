<?php
include_once('entidades/usuario.php');
include_once('datos/dt_usuario.php');
$dt_usuario = new DtUsuario();
$usuario = $dt_usuario->find_by_id($id_from_url);
$page_title = 'Editar Usuario';
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_usuario.php" method="POST">
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly name="id_usuario" type="text"
              value="<?php echo $usuario->__GET('id_usuario') ?>"/>
          </div>

          <div class="mb-3">
            <label>Usuario</label>
            <input required class="form-control" type="text" name="usuario"
              value="<?php echo $usuario->__GET('usuario') ?>">
          </div>

          <div class="mb-3">
            <label>Contraseña</label>
            <input required class="form-control" type="password" name="pwd"
              value="<?php echo $usuario->__GET('pwd') ?>">
          </div>

          <div class="mb-3">
            <label>Confirmar Contraseña</label>
            <input required class="form-control" type="password" name="confirm_pwd">
          </div>

          <div class="mb-3">
            <label>Nombres</label>
            <input required class="form-control" type="text" name="nombres"
              value="<?php echo $usuario->__GET('nombres') ?>">
          </div>

          <div class="mb-3">
            <label>Apellidos</label>
            <input required class="form-control" type="text" name="apellidos"
              value="<?php echo $usuario->__GET('apellidos') ?>">
          </div>

          <div class="mb-3">
            <label>E-mail</label>
            <input required class="form-control" type="email" name="email"
              value="<?php echo $usuario->__GET('email') ?>">
          </div>

          <input name="estado" type="hidden" value="1">

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
