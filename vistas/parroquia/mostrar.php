<?php
include('entidades/parroquia.php');
include('datos/dt_parroquia.php');
$page_title = 'Parroquia';
$encabezados = ['ID','Nombre', 'Direccion', 'Telefono', 'Parroco', 'Logo', 'Sitio web','Opciones'];
$campo_id = 'idParroquia';
$campos = ['idParroquia', 'nombre', 'direccion', 'telefono', 'parroco', 'logo', 'sitio_web'];

$dt_parroquia = new DtParroquia();
$datos = $dt_parroquia->get_data()
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
