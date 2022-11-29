<?php
include('datos/dt_kermesse.php');
include('datos/dt_comunidad.php');
include('datos/dt_producto.php');
$page_title = 'Agregar Ingreso comunidad';
$dt_kermesse = new DtKermesse();
$dt_comunidad = new DtComunidad();
$dt_producto = new DtProducto();
$kermesses = $dt_kermesse->get_data();
$comunidades = $dt_comunidad->get_data();
$productos = $dt_producto->get_data();

$now = new DateTime();
$current_date = $now->format('Y-m-d H:i:s');
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá agregar los datos de los Ingreso de comunidad del sistema.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar ingreso comunidad
      </div>
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_ingreso_comunidad.php" method="POST">
          <input type="hidden" name="usuario_creacion" value="<?php echo $logged_user->__GET('id_usuario'); ?>">
          <input type="hidden" name="fecha_creacion" value="<?php echo $current_date; ?>">

          <div class="mb-3">
            <label>Kermesse</label>
            <select class="form-control" name="id_kermesse">
              <?php foreach ($kermesses as $kermesse) : ?>
                <option value="<?php echo $kermesse->__GET('id_kermesse') ?>">
                  <?php echo ($kermesse->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Comunidades</label>
            <select class="form-control" name="id_comunidad">
              <?php foreach ($comunidades as $comunidad) : ?>
                <option value="<?php echo $comunidad->__GET('id_comunidad') ?>">
                  <?php echo ($comunidad->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Productos</label>
            <select class="form-control" name="id_producto">
              <?php foreach ($productos as $producto) : ?>
                <option value="<?php echo $producto->__GET('id_producto') ?>">
                  <?php echo ($producto->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Cantidad de productos:</label>
            <input class="form-control" type="text" name="cant_productos" required />
          </div>
          <div class="mb-3">
            <label for="pwd">Total Bonos:</label>
            <input class="form-control" type="text" name="total_bonos" required />
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