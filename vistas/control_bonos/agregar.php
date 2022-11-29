<?php
include('entidades/control_bonos.php');
$page_title = 'Agregar Control Bonos';
$encabezados = [];
$campo_id = 'id_control_bonos';
$campos = ['id_control_bonos'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>

    <div class="card mb-4">
      <div class="card-body">
        En este formulario se agregaran datos a Control Bonos.
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar el control de bonos
      </div>
      <div class="card-body">
        <form method="POST" action="./negocio/NgUsuario.php">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label>ID:</label>
            <input class="form-control" type="text" name="id_denominacion" readonly required />
          </div>
          <div class="mb-3">
            <label>Nombre:</label>
            <input class="form-control" type="text" name="nombre" required />
          </div>
          <div class="mb-3">
            <label>Valor:</label>
            <input class="form-control" type="Text" name="valor" required />
          </div>

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