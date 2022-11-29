<?php
include('entidades/lista_precio.php');
$page_title = 'Agregar Lista Precio';
$encabezados = [];
$campo_id = 'id_lista_precio';
$campos = ['id_lista_precio'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá editar los datos de las lista precio.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar lista precio
      </div>
      <div class="card-body">
        <form method="POST" action="./negocio/NgUsuario.php">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label for="apellidos">Nombre:</label>
            <input class="form-control" type="Text" name="nombre" required />
          </div>
          <div class="mb-3">
            <label for="pwd">Descripcion:</label>
            <input class="form-control" type="Text" name="descripcion" required />
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