<?php
include('entidades/denominacion.php');
$page_title = 'Denominacion';
$encabezados = [];
$campo_id = 'id_denominacion';
$campos = ['id_denominacion'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario se visualizan los datos de la denominaciones.
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
            <label for="exampleFormControlInput1">ID Moneda</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID Moneda" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Valor</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="valor" placeholder="Valor" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Valor Letras</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="valor" placeholder="Valor Letras" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Estado</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="estado" placeholder="Estado" disabled />
          </div>
        </form>
        <!---->
      </div>
    </div>
</main>
<?php include('./partials/_footer.php') ?>