<?php
include('entidades/kermesse.php');
$page_title = 'Kermesse';
$encabezados = ['ID', 'ID Parroquia', 'Nombre', 'Fecha inicio', 'Desrcipción', 'Estado', 'Opciones'];
$campo_id = 'id_kermesse';
$campos = ['id_kermesse', 'id_parroquia', 'nombre', 'fecha_inicio', 'descripcion', 'estado'];

$krm1 = new Kermesse();
$krm1->__set('id_kermesse', 1);
$krm1->__set('id_parroquia', 1);
$krm1->__set('nombre', 'Kermesse Noviembre');
$krm1->__set('fecha_inicio', '12/11/2022');
$krm1->__set('descripcion', 'aaaaaaaaaaaaaaaaaaa');
$krm1->__set('estado', 1);
$krm2 = new Kermesse();
$krm2->__set('id_kermesse', 1);
$krm2->__set('id_parroquia', 1);
$krm2->__set('nombre', 'Kermesse Diciembre');
$krm2->__set('fecha_inicio', '09/12/2022');
$krm2->__set('descripcion', 'bbbbbbbbbbbb');
$krm2->__set('estado', 1);

$datos = [$krm1, $krm2];
?>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  <?php include('./partials/_table.php') ?>
</div>
</main>
<?php include('./partials/_footer.php') ?>
