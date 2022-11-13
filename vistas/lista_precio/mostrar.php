<?php
include('entidades/lista_precio.php');
$page_title = 'Lista Precio';
$encabezados = ['ID', 'ID Kermesse','Nombre','Descripcion','estado','Opciones'];
$campo_id = 'id_lista_precio';
$campos = ['id_lista_precio', 'id_kermesse','nombre','descripcion','estado'];

$lp = new ListaPrecio();
$lp-> __SET('id_lista_precio',1);
$lp-> __SET('id_kermesse',1);
$lp-> __SET('nombre',"Juan");
$lp-> __SET('descripcion',"Lorem ipsum sadlad is navil santus patronus");
$lp-> __SET('estado',1);

$datos = [$lp]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
