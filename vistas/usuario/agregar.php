<?php
include_once('entidades/usuario.php');
$page_title = 'Agregar Usuario';
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_usuario.php" method="POST">
          <div class="mb-3">
            <label>Usuario</label>
            <input required class="form-control" type="text" name="usuario">
          </div>

          <div class="mb-3">
            <label>Contraseña</label>
            <input required class="form-control" type="password" name="pwd">
          </div>

          <div class="mb-3">
            <label>Confirmar Contraseña</label>
            <input required class="form-control" type="password" name="confirm_pwd">
          </div>

          <div class="mb-3">
            <label>Nombres</label>
            <input required class="form-control" type="text" name="nombres">
          </div>

          <div class="mb-3">
            <label>Apellidos</label>
            <input required class="form-control" type="text" name="apellidos">
          </div>

          <div class="mb-3">
            <label>E-mail</label>
            <input required class="form-control" type="email" name="email">
          </div>

          <input name="estado" type="hidden" value="1">

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
