<?php
include('entidades/lista_precio.php');
$page_title = 'Lista Precio';
$encabezados = [];
$campo_id = 'id_lista_precio';
$campos = ['id_lista_precio'];
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
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id_kermesse" placeholder="ID Kermesse" disabled />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Nombre</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="nombre" placeholder="Nombre" />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Descripcion</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="descripcion" placeholder="Descripcion" />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1">Estado</label>
              <input class="form-control form-control-solid" id="exampleFormControlInput1" type="estado" placeholder="Estado" />
            </div>

            <button class="btn btn-primary" type="button">Agregar</button>

          </form>
          <!---->
        </div>
      </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>