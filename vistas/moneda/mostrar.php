<?php
include('entidades/moneda.php');
include('datos/dt_moneda.php');
$page_title = 'Moneda';
$encabezados = ['ID', 'Nombre','Simbolo', 'Estado', 'Opciones'];
$campo_id = 'id_moneda';
$campos = ['id_moneda', 'nombre', 'simbolo', 'estado'];

$dt_moneda = new DtMoneda();
$datos = $dt_moneda->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
