<?php
include('entidades/ingreso_comunidad.php');
$page_title = 'Editar Ingreso Comunidad';
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
        En este formulario podrá editar los datos de los Ingreso de comunidad del sistema.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Editar ingreso comunidad
      </div>
      <div class="card-body">
        <form method="POST" action="./negocio/NgUsuario.php">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="form-floating mb-3">
            <input class="form-control" id="id_user" name="id_user" type="text" readonly required />
            <input class="form-control" id="idU" name="idU" type="hidden" />
            <label for="nombres">ID Usuario:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="user" name="user" type="text" readonly required />
            <input class="form-control" id="userHidden" name="userHidden" type="hidden" />
            <label for="nombres">ID Kermesse:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="user" name="user" type="text"  readonly required />
            <input class="form-control" id="userHidden" name="userHidden" type="hidden" />
            <label for="nombres">ID Comunidad:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="user" name="user" type="text" readonly required />
            <input class="form-control" id="userHidden" name="userHidden" type="hidden" />
            <label for="nombres">ID Producto:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="apellidos" name="apellidos" type="text" title="Ingrese la cantidad de productos" required />
            <label for="apellidos">Cantidad de productos:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese el total de bonos" required />
            <label for="pwd">Total Bonos:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese el estado" required />
            <label for="pwd">Estado:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese el ususario" required />
            <label for="pwd">Usuario:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese la fecha de creación" required />
            <label for="pwd">Fecha de creacion:</label>
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
