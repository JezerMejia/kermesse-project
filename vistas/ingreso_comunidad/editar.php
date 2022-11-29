<?php
include('entidades/ingreso_comunidad.php');
include('datos/dt_ingreso_comunidad.php');
include('datos/dt_kermesse.php');
include('datos/dt_comunidad.php');
include('datos/dt_producto.php');

$dt_ingreso_comunidad = new DtIngresoComunidad();
$dt_comunidad = new DtComunidad();
$dt_producto = new DtProducto();

$ingreso_comunidad = $dt_ingreso_comunidad->find_by_id($id_from_url);
$id_comunidad = $ingreso_comunidad->__GET("id_comunidad");
$id_producto = $ingreso_comunidad->__GET("id_producto");

$comunidad = $dt_comunidad->get_data();
$producto = $dt_producto->get_data();

$page_title = 'Editar Ingreso comunidad';
$mostrar = false;
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
        <form action="<?php echo $base_url ?>/negocio/ng_ingreso_comunidad.php" method="POST">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          <div class="mb-3">
            <label for="nombres">ID Usuario:</label>
            <input class="form-control" type="text" name="id_ingreso_comunidad"
            value="<?php echo $ingreso_comunidad->__GET('id_ingreso_comunidad') ?>" readonly required />
          </div>
          <div class="mb-3">
            <label>Kermesse:</label>
            <select class="form-control" name="id_kermesses">
              <?php foreach ($kermesses as $kermesses) : ?>
                <?php
                $ker_id = $kermesses->__GET('id_kermesses');
                $ker_name = $kermesses->__GET('nombre');
                ?>
                <option value="<?php echo $ker_id ?>" <?php echo ($id_kermesses == $ker_id) ? "selected" : "" ?>>
                  <?php echo ($ker_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Comunidad:</label>
            <select class="form-control" name="id_comunidad">
              <?php foreach ($comunidad as $comunidad) : ?>
                <?php
                $com_id = $comunidad->__GET('id_comunidad');
                $com_name = $comunidad->__GET('nombre');
                ?>
                <option value="<?php echo $com_id ?>" <?php echo ($id_comunidad == $com_id) ? "selected" : "" ?>>
                  <?php echo ($com_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
          <label>Producto:</label>
            <select class="form-control" name="id_producto">
              <?php foreach ($producto as $producto) : ?>
                <?php
                  $pro_id = $producto->__GET('id_producto');
                  $pro_name = $producto->__GET('nombre');
                ?>
                <option value="<?php echo $pro_id?>"
                  <?php echo ($id_producto == $pro_id) ? "selected" : ""?>>
                  <?php echo ($pro_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label>Cantidad de productos:</label>
            <input class="form-control" type="text" name="cant_productos"
            value="<?php echo $ingreso_comunidad->__GET('cant_productos') ?>" required />
          </div>

          <input class="form-check-input" id="estado" type="hidden" value="1" name="estado">
          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Aceptar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
    <h2>Detalles</h2>
    <?php include_once 'vistas/ingreso_comunidad_det/mostrar.php' ?>
  </div>
</main>
<?php include('./partials/_footer.php') ?>