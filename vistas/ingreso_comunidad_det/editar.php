<?php
include('entidades/ingreso_comunidad_det.php');
$page_title = 'Editar Ingreso Comunidad Det';
$encabezados = [];
$campo_id = 'id_ingreso_comunidad_det';
$campos = ['id_ingreso_comunidad_det'];
$datos = []
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <ol class="breadcrumb mb-4">
      <!--<li class="breadcrumb-item">
          <a href="./partials/_nav.php">Gestión Usuarios</a>
        </li>*/
      <li class="breadcrumb-item active">
         Editar Ingreso
      </li>
    -->
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá editar los datos de los Ingreso de comunidad del sistema.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Editar ingreso comunidad det
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
            <input class="form-control" id="user" name="user" type="text" title="Ingrese su usuario" readonly required />
            <input class="form-control" id="userHidden" name="userHidden" type="hidden" />
            <label for="nombres">ID Ingreso de comunidad:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="user" name="user" type="text" title="Ingrese su usuario" readonly required />
            <input class="form-control" id="userHidden" name="userHidden" type="hidden" />
            <label for="nombres">ID Bono:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="apellidos" name="apellidos" type="text" title="Ingrese sus apellidos" required />
            <label for="apellidos">Denominacion:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese una contraseña segura" required />
            <label for="pwd">Cantidad:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese una contraseña segura" required />
            <label for="pwd">Subtotal del bono:</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="pwd" name="pwd" type="password" title="Ingrese una contraseña segura" required />
            <label for="pwd">Opciones:</label>
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