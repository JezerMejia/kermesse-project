<?php
include('entidades/lista_precio_det.php');
$page_title = 'Agregar Lista Precio Det';
$encabezados = [];
$campo_id = 'id_lista_precio_det';
$campos = ['id_lista_precio_det'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-1">
      <div class="card-body">
        En este formulario se agregaran datos a lista precio.
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <!---->
          <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1">ID</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">ID Lista precio</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
                type="id_lista_precio" placeholder="ID Lista precio" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">ID Producto</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
                type="id_producto" placeholder="ID Producto" disabled/>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Precio venta</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1"
                type="precio_venta" placeholder="Precio venta" />
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