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
  
  <div class="card mb-4 w-100 p-1">
    <div class="card-body">
        En este formulario se agregaran datos a Control Bonos.
    </div>

    <div class="card mb-4">
      <div class="card-body">
      <!---->
      <form>
        <div class="mb-3">
          <label for="exampleFormControlInput1">ID</label>
          <input class="form-control form-control-solid" id="exampleFormControlInput1" 
            type="id" placeholder="ID" disabled/>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1">Nombre</label>
          <input class="form-control form-control-solid" id="exampleFormControlInput1" 
          type="nombre" placeholder="Nombre del usuario"/>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1">Valor</label>
          <input class="form-control form-control-solid" id="exampleFormControlInput1"
          type="valor" placeholder="Valor"/>
        </div>
      </form>
      <!---->
      </div>
    </div>
  </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>
