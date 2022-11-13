<?php
include('entidades/ingreso_comunidad.php');
$page_title = 'Ingreso Comunidad';
$encabezados = ['ID', 'ID Kermesse', 'ID Comunidad', 'ID Producto', 'Cantidad de productos', 'Total Bonos','Estado','Usuario', 'Fecha de creacion','Opciones'];
$campo_id = 'id_ingreso_comunidad';
$campos = ['id_ingreso_comunidad','id_kermesse','id_comunidad','id_producto','cant_productos','total_bonos','estado','usuario_creacion','fecha_creacion'];

$ic = new IngresoComunidad();
$ic->__SET('id_ingreso_comunidad',1);
$ic->__SET('id_kermesse',1);
$ic->__SET('id_comunidad',1);
$ic->__SET('id_producto',1);
$ic->__SET('cant_productos',12);
$ic->__SET('total_bonos',15);
$ic->__SET('estado',10);
$ic->__SET('usuario_creacion',"Jose");
$ic->__SET('fecha_creacion',"20/10/2022");

$datos = [$ic]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
