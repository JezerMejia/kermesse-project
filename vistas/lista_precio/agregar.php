<?php
include('datos/dt_kermesse.php');
$page_title = 'Agregar lista precio';
$dt_kermesse = new DtKermesse();
$kermesses = $dt_kermesse->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá editar los datos de las lista precio.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar lista precio
      </div>

      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_lista_precio.php" method="POST">
          <div class="mb-3">
            <label>Kermesse</label>
            <select class="form-control" name="id_kermesse">
              <?php foreach ($kermesses as $kermesse) : ?>
                <option value="<?php echo $kermesse->__GET('id_kermesse') ?>">
                  <?php echo ($kermesse->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="apellidos">Nombre:</label>
            <input class="form-control" type="Text" name="nombre" required />
          </div>
          <div class="mb-3">
            <label for="pwd">Descripcion:</label>
            <input class="form-control" type="Text" name="descripcion" required />
          </div>

          <input class="form-check-input" id="estado" type="hidden" value="1" name="estado">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Aceptar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>