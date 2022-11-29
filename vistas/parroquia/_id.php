<?php
include('entidades/parroquia.php');
include('datos/dt_parroquia.php');

$dt_parroquia = new DtParroquia();
$parroquia = $dt_parroquia->find_by_id($id_from_url);
$page_title = 'Parroquia';
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
            <input class="form-control" readonly type="number" name="id_parroquia"
              value="<?php echo $parroquia->__GET('id_parroquia')?>"/>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $parroquia->__GET('nombre')?>"/>
          </div>

          <div class="mb-3">
            <label>Direccion</label>
            <input class="form-control" readonly type="text" name="direccion"
              value="<?php echo $parroquia->__GET('direccion')?>"/>
          </div>

          <div class="mb-3">
            <label>Telefono</label>
            <input class="form-control" readonly type="number" name="telefono"
              value="<?php echo $parroquia->__GET('telefono')?>">
          </div>

          <div class="mb-3">
            <label>Parroco</label>
            <input class="form-control" readonly type="text" name="parroco"
              value="<?php echo $parroquia->__GET('parroco')?>"/>
          </div>

          <div class="mb-3">
            <label>Logo</label>
            <input class="form-control" readonly type="text" name="logo"
              value="<?php echo $parroquia->__GET('logo')?>"/>
          </div>

          <div class="mb-3">
            <label>Sitio Web</label>
            <input class="form-control" readonly type="text" name="sitio_web"
              value="<?php echo $parroquia->__GET('sitio_web')?>"/>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>