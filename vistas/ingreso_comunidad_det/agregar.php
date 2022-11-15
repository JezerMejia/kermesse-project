<?php
include('entidades/ingreso_comunidad_det.php');
$page_title = 'Agregar Ingreso Comunidad Det';
$encabezados = [];
$campo_id = 'id_ingreso_comunidad_det';
$campos = ['id_ingreso_comunidad_det'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-1">
      <div class="card-body">
        En este formulario se agregaran datos a ingreso comunidad.
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <!---->
          <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1">ID</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
                type="id" placeholder="ID" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">ID Ingreso de comunidad</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" 
                type="id_ingreso_comunidad" placeholder="ID Ingreso de comunidad" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">ID Bono</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
              type="id" placeholder="ID Comunidad" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Denominacion</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
              type="denominacion" placeholder="Denominacion"/>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Cantidad</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
              type="cantidad" placeholder="Cantidad" />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Subtotal del bono</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
              type="subtotal_bono" placeholder="Subtotal del bono" />
            </div>
            
            <button class="btn btn-primary" type="button">Agregar</button>

          </form>
          <!---->
        </div>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>