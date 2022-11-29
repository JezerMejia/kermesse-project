<?php
include('entidades/ingreso_comunidad.php');
$page_title = 'Agregar Ingreso Comunidad';
$encabezados = [];
$campo_id = 'id_ingreso_comunidad';
$campos = ['id_ingreso_comunidad'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá agregar los datos de los Ingreso de comunidad del sistema.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar ingreso comunidad
      </div>
      <div class="card-body">
        <form method="POST" action="./negocio/NgUsuario.php">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label>Cantidad de productos:</label>
            <input class="form-control" type="text" name="cant_productos" required />
          </div>
          <div class="mb-3">
            <label for="pwd">Total Bonos:</label>
            <input class="form-control" type="text" name="total_bonos" required />
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