<?php
include('entidades/parroquia.php');
$page_title = 'Parroquia';
$encabezados = ['ID','Nombre', 'Direccion', 'Telefono', 'Parroco', 'Logo', 'Sitio web','Opciones'];
$campo_id = 'id_parroquia';
$campos = ['id_parroquia', 'nombre', 'direccion', 'telefono', 'parroco', 'logo', 'sitio_web'];

$tc = new Parroquia();
$tc->__SET('id_parroquia',1);
$tc->__SET('nombre', "Jesus Sacramentado");
$tc->__SET('direccion',"Porton este colegio santa rosa");
$tc->__SET('telefono', "+505 8934-6721");
$tc->__SET('parroco', "Jueves azuceno");
$tc->__SET('logo', "Amen");
$tc->__SET('sitio_web', "www.JS.com.ni");

$tcx = new Parroquia();
$tcx->__SET('id_parroquia',2);
$tcx->__SET('nombre', "Maria de los angeles");
$tcx->__SET('direccion',"Manzana 10 comunidad el rama");
$tcx->__SET('telefono', "+505 0504-1269");
$tcx->__SET('parroco', "Moises Marillac");
$tcx->__SET('logo', "Omega");
$tcx->__SET('sitio_web', "www.MDLAngeles.com.ni");

$datos = [$tc, $tcx]
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
