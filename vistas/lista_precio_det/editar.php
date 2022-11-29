<?php
include('entidades/lista_precio_det.php');
include('datos/dt_lista_precio_det.php');
include('datos/dt_lista_precio.php');
include('datos/dt_producto.php');
$dt_lista_precio_det = new DtListaPrecioDet();
$dt_lista_precio = new DtListaPrecio();
$dt_producto = new DtProducto();
$productos = $dt_producto->get_data();
$lista_precio = $dt_lista_precio->get_data();
$detalle = $dt_lista_precio_det->find_by_id($id_from_url);
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
        Editar ingreso comunidad det
      </div>
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_lista_precio_det.php" method="POST">
          <input name="parent_id" type="hidden" value="<?php echo $_GET['parent_id'] ?>">
          <input name="id_lista_precio" type="hidden" value="<?php echo $_GET['parent_id'] ?>">

          <div class="mb-3">
            <label>ID</label>
            <input name="id_lista_precio_det" type="text" readonly class="form-control" value="<?php echo $detalle->__GET('id_lista_precio_det') ?>" />
          </div>

          <div class="mb-3">
            <label>ID Lista Precio</label>
            <input name="id_lista_precio" type="text" readonly class="form-control" value="<?php echo $detalle->__GET('id_lista_precio') ?>" />
          </div>

          <div class="mb-3">
            <label>Control bonos</label>
            <select class="form-control" name="id_producto">
              <?php foreach ($productos as $producto) : ?>
                <option value="<?php echo $producto->__GET('id_producto') ?>">
                  <?php echo ($producto->__GET('nombre')) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label>Precio venta</label>
            <input class="form-control" step="0.01" type="number" name="cantidad" value="<?php echo $detalle->__GET('precio_venta') ?>">
          </div>

          <div class="mb-3">
            <label>Cantidad</label>
            <input class="form-control" step="0.01" type="number" name="cantidad" value="<?php echo $detalle->__GET('cantidad') ?>">
          </div>

          <div class="mb-3">
            <label>Subtotal</label>
            <input class="form-control" step="0.01" type="number" name="subtotal" value="<?php echo $detalle->__GET('subtotal_bono') ?>">
          </div>

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
        </form>
      </div>
    </div>
</div>
</main>
<?php include('./partials/_footer.php') ?>
