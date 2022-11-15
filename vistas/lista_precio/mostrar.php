<?php
include('entidades/lista_precio.php');
include('datos/dt_lista_precio.php');
$page_title = 'Lista Precio';
$encabezados = ['ID', 'ID Kermesse','Nombre','Descripcion','estado','Opciones'];
$campo_id = 'id_lista_precio';
$campos = ['id_lista_precio', 'id_kermesse','nombre','descripcion','estado'];

$lp = new DtListaPrecio();

$datos = $lp->get_data();
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
