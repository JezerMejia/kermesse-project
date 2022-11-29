<?php
include('entidades/control_bonos.php');
include('datos/dt_control_bonos.php');
/*$page_title = 'Control Bonos';
$encabezados = [];
$campo_id = 'id_control_bonos';
$campos = ['id_control_bonos'];
$datos = []
*/
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
        En este formulario se podrá visualizar los datos del control de bonos.
      </div>
    </div>

      <div class="card mb-4">
        <div class="card-body">
          <!---->
          <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1">ID</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID"
              value="<?php echo $control_bonos->__GET('id_bono') ?>" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Nombre</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="nombre" placeholder="Nombre del usuario"
              value="<?php echo $control_bonos->__GET('nombre') ?>" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Valor</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="valor" placeholder="Valor"
              value="<?php echo $control_bonos->__GET('valor') ?>" disabled />
            </div>
          </form>
          <!---->
        </div>
      </div>
    </div>
</main>
<?php include('./partials/_footer.php') ?>