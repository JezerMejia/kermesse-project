<?php
include('entidades/control_bonos.php');
$page_title = 'Control Bonos';
$encabezados = ['ID', 'Nombre', 'Valor', 'Estado', 'Opciones'];
$campo_id = 'id_bono';
$campos = ['id_bono', 'nombre', 'valor', 'estado'];

$cb = new ControlBonos();
$cb->__SET('id_bono', 1);
$cb->__SET('nombre', 'hola');
$cb->__SET('valor', 1000);
$cb->__SET('estado', 1);

$datos = [$cb];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
