<?php
include('entidades/lista_precio.php');
include('datos/dt_lista_precio.php');
include('datos/dt_kermesse.php');
$page_title = 'Lista Precio';
$encabezados = ['ID', 'Kermesse','Nombre','Descripcion','Estado','Opciones'];
$campo_id = 'id_lista_precio';
$campos = ['id_lista_precio', 'kermesse','nombre','descripcion','estado'];

$lp = new DtListaPrecio();
$dt_kermesse = new DtKermesse();

$datos = $lp->get_data();

foreach($datos as $lp) {
  $kermesse = $dt_kermesse->find_by_id($lp->__GET('id_kermesse'));
  $lp->__SET('kermesse', $kermesse->__GET('nombre'));
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
