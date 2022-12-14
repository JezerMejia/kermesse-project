<?php
include('entidades/ingreso_comunidad.php');
include('datos/dt_ingreso_comunidad.php');
include('datos/dt_kermesse.php');
include('datos/dt_comunidad.php');
include('datos/dt_producto.php');

$dt_ingreso_comunidad = new DtIngresoComunidad();
$dt_kermesse = new DtKermesse();
$dt_comunidad = new DtComunidad();
$dt_producto = new DtProducto();

$ingreso_comunidad = $dt_ingreso_comunidad->find_by_id($id_from_url);
$id_kermesses = $ingreso_comunidad->__GET("id_kermesses");
$id_comunidad = $ingreso_comunidad->__GET("id_comunidad");
$id_producto = $ingreso_comunidad->__GET("id_producto");

$kermesses = $dt_kermesse->get_data();
$comunidad = $dt_comunidad->get_data();
$producto = $dt_producto->get_data();

$page_title = 'Visualizar Ingreso comunidad';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario se podrá visualizar los datos del ingreso comunidad.
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <!---->
        <form>
          <div class="mb-3">
            <label for="exampleFormControlInput1">ID</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID" value="<?php echo $ingreso_comunidad->__GET('id_ingreso_comunidad') ?>" disabled />
          </div>

          <div class="mb-3">
            <label>Kermesse:</label>
            <select class="form-control" name="id_kermesses" disabled>
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
            <select class="form-control" name="id_comunidad" disabled>
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
            <select class="form-control" name="id_producto" disabled>
              <?php foreach ($producto as $producto) : ?>
                <?php
                $pro_id = $producto->__GET('id_producto');
                $pro_name = $producto->__GET('nombre');
                ?>
                <option value="<?php echo $pro_id ?>" <?php echo ($id_producto == $pro_id) ? "selected" : "" ?>>
                  <?php echo ($pro_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Cantidad de productos</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="cant_productos" placeholder="Cantidad de productos"
            value="<?php echo $ingreso_comunidad->__GET('cant_productos') ?>" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Total Bonos</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="total_bonos" placeholder="Total Bonos"
            value="<?php echo $ingreso_comunidad->__GET('total_bonos') ?>" disabled />
          </div>
        </form>
        <!---->
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>