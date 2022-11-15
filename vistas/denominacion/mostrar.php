<?php
include('entidades/denominacion.php');
include('datos/dt_denominacion.php');
$page_title = 'Denominacion';
$encabezados = ['ID', 'ID moneda', 'Valor', 'Valor letras', 'estado', 'Opciones'];
$campo_id = 'id_denominacion';
$campos = ['id_denominacion', 'id_moneda', 'valor', 'valor_letras', 'estado'];

$deno = new DtDenominacion();
$datos = $deno->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
