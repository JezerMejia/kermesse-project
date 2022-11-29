<?php
include('entidades/kermesse.php');
include('datos/dt_kermesse.php');
include('datos/dt_parroquia.php');

$page_title = 'Editar Kermesse';
$dt_kermesse = new DtKermesse();
$kermesse = $dt_kermesse->find_by_id($id_from_url);
$dt_parroquia = new DtParroquia();
$parroquias = $dt_parroquia->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_kermesse.php" method="POST">

          <input name="usuario_modificacion" type="hidden" value="<?php echo $logged_user->__GET('id_usuario') ?>">
          <input name="fecha_modificacion" type="hidden" value="<?php echo date('Y-m-d') ?>">
          <input name="estado" type="hidden" value="2">

          <div class="mb-3">
            <label>ID</label>
            <input name="id_kermesse" type="text" readonly class="form-control"
            value="<?php echo $kermesse->__GET('id_kermesse') ?>" />
          </div>
          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre"
            value="<?php echo $kermesse->__GET('nombre') ?>">
          </div>

          <div class="mb-3">
            <label>Parroquia</label>
            <select class="form-control" name="id_parroquia">
              <?php foreach ($parroquias as $parroquia) : ?>
                <option 
                <?php echo $parroquia->__GET('id_parroquia') == $kermesse->__GET('id_parroquia') ? "selected" : "" ?>
                value="<?php echo $parroquia->__GET('id_parroquia') ?>">
                  <?php echo ($parroquia->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Fecha Inicio</label>
            <input class="form-control" type="date" name="fecha_inicio"
            value="<?php echo $kermesse->__GET('fecha_inicio') ?>">
          </div>

          <div class="mb-3">
            <label>Fecha Fin</label>
            <input class="form-control" type="date" name="fecha_final"
            value="<?php echo $kermesse->__GET('fecha_final') ?>">
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion"
            value="<?php echo $kermesse->__GET('descripcion') ?>">
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