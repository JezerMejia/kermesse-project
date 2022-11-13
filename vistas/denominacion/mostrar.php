<?php
include('entidades/denominacion.php');
$page_title = 'Denominacion';
$encabezados = ['ID', 'ID moneda', 'Valor', 'Valor letras', 'estado', 'Opciones'];
$campo_id = 'id_denominacion';
$campos = ['id_denominacion', 'id_moneda', 'valor', 'valor_letras', 'estado'];

$deno = new Denominacion();
$deno->__SET('id_denominacion', 1);
$deno->__SET('id_moneda', 0);
$deno->__SET('valor', 1000);
$deno->__SET('valor_letras', 2000);
$deno->__SET('estado', 1);

$datos = [$deno]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
