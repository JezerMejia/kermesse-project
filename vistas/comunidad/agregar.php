<?php
include('entidades/comunidad.php');
$page_title = 'Agregar Comunidad';
$encabezados = [];
$campo_id = 'id_comunidad';
$campos = ['id_comunidad'];
$datos = []
?>

<form action="form-input-2.php">
  <p>Nombre: <input type="text" name="nombre"></p>
  <p><input type="submit" value="Enviar"></p>
</form>

<?php include('./partials/_nav.php') ?>
<main>
<div class="container-fluid px-4">
  <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
  
</div>
</main>
<?php include('./partials/_footer.php') ?>
