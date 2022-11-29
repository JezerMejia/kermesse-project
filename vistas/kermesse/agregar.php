<?php
include('datos/dt_parroquia.php');
$page_title = 'Agregar Kermesse';
$dt_parroquia = new DtParroquia();
$parroquias = $dt_parroquia->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form action="<?php echo $base_url?>/negocio/ng_kermesse.php" method="POST">

          <input name="id_kermesse" type="hidden" value="0"/>
          <input name="estado" type="hidden" value="1">
          <input name="usuario_creacion" type="hidden" value="<?php echo $logged_user->__GET('id_usuario') ?>">
          <input name="fecha_creacion" type="hidden" value="<?php echo date('Y-m-d') ?>">
          
          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre">
          </div>

          <div class="mb-3">
            <label>Parroquia</label>
            <select class="form-control" name="id_parroquia">
              <?php foreach ($parroquias as $parroquia) : ?>
                <option value="<?php echo $parroquia->__GET('id_parroquia')?>">
                  <?php echo ($parroquia->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Fecha Inicio</label>
            <input class="form-control" type="date" name="fecha_inicio">
          </div>

          <div class="mb-3">
            <label>Fecha Fin</label>
            <input class="form-control" type="date" name="fecha_final">
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion">
          </div>


          
          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
            
        </form>
      </div>
    </div>
</main>
<?php include('./partials/_footer.php') ?>
