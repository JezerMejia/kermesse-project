<?php
include('entidades/opcion.php');
$page_title = 'Opcion';
$encabezados = ['ID', 'Descripcion', 'Estado','Opciones'];
$campo_id = 'id_opcion';
$campos = ['id_opcion','descripcion', 'estado'];

$tc = new Opcion();
$tc->__SET('id_opcion',1);
$tc->__SET('descripcion', "5 bebidas en total");
$tc->__SET('estado',1);

$tcx = new Opcion();
$tcx->__SET('id_opcion',2);
$tcx->__SET('descripcion', "2 galones de eskimo");
$tcx->__SET('estado',1);

$datos = [$tc, $tcx]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
