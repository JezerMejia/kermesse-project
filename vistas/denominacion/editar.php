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
          <div class="form-floating mb-3">
            <input class="form-control" id="id_user" name="id_user" type="text" readonly required />
            <input class="form-control" id="idU" name="idU" type="hidden" />
            <label for="nombres">ID:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="id_user" name="id_user" type="text" readonly required />
            <input class="form-control" id="idU" name="idU" type="hidden" />
            <label for="nombres">ID moneda:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="apellidos" name="apellidos" type="text" title="Ingrese el nombre de la denominación" required />
            <label for="apellidos">Valor:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese el valor de la denominación" required />
            <label for="pwd">Valor letras:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese el estado de la denominación " required />
            <label for="pwd">Estado:</label>
          </div>  
            <div class="d-flex align-items-end justify-content-end mt-4 mb-0 gap-3">
              <input class="btn btn-primary" type="submit" value="Guardar" />
              <input class="btn btn-danger" type="reset" value="Cancelar" />
            </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>