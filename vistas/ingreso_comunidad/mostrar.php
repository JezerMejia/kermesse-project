<?php
include_once('entidades/ingreso_comunidad.php');
include_once('datos/dt_ingreso_comunidad.php');
include_once('datos/dt_kermesse.php');
include_once('datos/dt_comunidad.php');
include_once('datos/dt_producto.php');

$page_title = 'Ingreso Comunidad';
$encabezados = ['ID', 'Kermesse', 'Comunidad', 'Producto', 'Cantidad de productos', 'Total Bonos', 'Estado','Opciones'];
$campo_id = 'id_ingreso_comunidad';
$campos = ['id_ingreso_comunidad','kermesse','comunidad','producto','cant_productos','total_bonos',
'estado'];

$dt_ingreso = new DtIngresoComunidad();
$dt_kermesse = new DtKermesse();
$dt_comunidad = new DtComunidad();
$dt_producto = new DtProducto();

$datos = $dt_ingreso->get_data();

foreach ($datos as $dato) {
  $ker = $dt_kermesse->find_by_id($dato->__GET('id_kermesse'));
  $com = $dt_comunidad->find_by_id($dato->__GET('id_comunidad'));
  $prod = $dt_producto->find_by_id($dato->__GET('id_producto'));

  $dato->__SET('kermesse', $ker->__GET('nombre'));
  $dato->__SET('comunidad', $com->__GET('nombre'));
  $dato->__SET('producto', $prod->__GET('nombre'));
}
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
