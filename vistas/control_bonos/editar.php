<?php
include('entidades/control_bonos.php');
include('datos/dt_control_bonos.php');
/*$page_title = 'Editar Control Bonos';
$encabezados = [];
$campo_id = 'id_control_bonos';
$campos = ['id_control_bonos'];
$datos = []*/

$dt_control_bonos = new DtControlBonos();
$control_bonos = $dt_control_bonos->find_by_id($id_from_url);

$page_title = 'Editar Control Bonos';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá editar los datos del control de bonos.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Editar control bonos
      </div>
      <div class="card-body">
        <form method="POST" action="./negocio/NgUsuario.php">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label for="nombres">ID:</label>
            <input class="form-control" type="Text" name="id"
            value="<?php echo $control_bonos->__GET('id_bono') ?>" readonly required />
          </div>
          <div class="mb-3">
            <label for="apellidos">Nombre:</label>
            <input class="form-control" type="Text" name="nombre"
            value="<?php echo $control_bonos->__GET('nombre') ?>" required />
          </div>
          <div class="mb-3">
            <label for="pwd">Valor:</label>
            <input class="form-control" type="Text" name="valor"
            value="<?php echo $control_bonos->__GET('valor') ?>" required />
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