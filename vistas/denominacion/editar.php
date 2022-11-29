<?php
include('entidades/denominacion.php');
$page_title = 'Editar Denominacion';
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
        En este formulario podrá editar los datos dede la denominaciónes.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Editar de la denominación
      </div>
      <div class="card-body">
        <form method="POST" action="./negocio/NgUsuario.php">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label>ID:</label>
            <input class="form-control" type="text" name="id_denominacion" readonly required />
          </div>
          <div class="mb-3">
            <label>ID Moneda:</label>
            <input class="form-control" type="text" name="id_moneda" readonly required />
          </div>
          <div class="mb-3">
            <label>Valor:</label>
            <input class="form-control" type="Text" name="valor" required />
          </div>
          <div class="mb-3">
            <label>Valor letras:</label>
            <input class="form-control" type="Text" name="valor_letras" required />
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