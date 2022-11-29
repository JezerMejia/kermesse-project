<?php
include('datos/dt_comunidad.php');
$page_title = 'Agregar Comunidad';
?>

<form action="form-input-2.php">
  <p>Nombre: <input type="text" name="nombre"></p>
  <p><input type="submit" value="Enviar"></p>
</form>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control form-control-solid" type="number" placeholder="ID" disabled />
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <label>Responsable</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <label>Contribucion</label>
            <input class="form-control" type="text">
          </div>

          <div class="mb-3">
            <div class="form-check">
              <label class="form-check-label" for="estado">Activo?</label>
              <input class="form-check-input" id="estado" type="checkbox" value="">
            </div>
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="button">Agregar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</main>

<?php include('./partials/_footer.php') ?>
