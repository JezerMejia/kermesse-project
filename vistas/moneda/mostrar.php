<?php
include('entidades/moneda.php');
$page_title = 'Moneda';
$encabezados = ['ID', 'Nombre','Simbolo', 'Estado', 'Opciones'];
$campo_id = 'id_moneda';
$campos = ['id_moneda', 'nombre', 'estado'];
$datos = []

$tc = new Moneda();
$tc->__SET('id_moneda',1);
$tc->__SET('nombre',Cordoba);
$tc->__SET('estado',1);


$tcx = new Moneda();
$tcx->__SET('id_moneda',2);
$tcx->__SET('nombre',Dolar);
$tcx->__SET('estado',1);

$datos = [$tc, $tcx];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
