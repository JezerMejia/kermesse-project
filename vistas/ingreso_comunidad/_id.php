<?php
include('entidades/ingreso_comunidad.php');
$page_title = 'Ingreso Comunidad';
$encabezados = [];
$campo_id = 'id_ingreso_comunidad';
$campos = ['id_ingreso_comunidad'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario se podrá visualizar los datos del ingreso comunidad.
      </div>
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
            <label for="exampleFormControlInput1">ID Kermesse</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID Kermesse" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">ID Comunidad</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID Comunidad" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">ID Producto</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID Producto" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Cantidad de productos</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="cant_productos" placeholder="Cantidad de productos" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Total Bonos</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="total_bonos" placeholder="Total Bonos" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Estado</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="estado" placeholder="Estado" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Usuario</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="usuario_creacion" placeholder="Usuario" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Fecha de creacion</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="fecha_creacion" placeholder="Nombre del usuario" disabled />
          </div>
        </form>
        <!---->
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>