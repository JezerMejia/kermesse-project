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
            <input required class="form-control" type="text" name="usuario" readonly
              value="<?php echo $usuario->__GET('usuario') ?>">
          </div>

          <div class="mb-3">
            <label>Nombres</label>
            <input required class="form-control" type="text" name="nombres" readonly
              value="<?php echo $usuario->__GET('nombres') ?>">
          </div>

          <div class="mb-3">
            <label>Apellidos</label>
            <input required class="form-control" type="text" name="apellidos" readonly
              value="<?php echo $usuario->__GET('apellidos') ?>">
          </div>

          <div class="mb-3">
            <label>E-mail</label>
            <input required class="form-control" type="email" name="email" readonly
              value="<?php echo $usuario->__GET('email') ?>">
          </div>
        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>
