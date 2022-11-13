<?php
include('entidades/comunidad.php');
$page_title = 'Comunidad';
$encabezados = ['ID', 'Nombre', 'Responsable', 'Contribución', 'Estado', 'Opciones'];
$campo_id = 'id_comunidad';
$campos = ['id_comunidad', 'nombre', 'responsable','desc_contribucion','estado'];

$tc = new Comunidad();
$tc->__SET('id_comunidad',1);
$tc->__SET('nombre', "Reparto Shick");
$tc->__SET('responsable', "Armando Meza");
$tc->__SET('desc_contribucion',30);
$tc->__SET('estado',1);

$tcx = new Comunidad();
$tcx->__SET('id_comunidad',2);
$tcx->__SET('nombre', "Barrio Domitila Lugo");
$tcx->__SET('responsable', "Luis Fonsi");
$tcx->__SET('desc_contribucion',50);
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
