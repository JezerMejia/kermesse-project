<?php
include('entidades/moneda.php');
include('datos/dt_moneda.php');

$dt_moneda = new DtMoneda();
$moneda = $dt_moneda->find_by_id($id_from_url);
$page_title = 'Moneda';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>
    <div class="card mb-4 w-100 p-2">
      <div class="card-body">
      <form>
          <div class="mb-3">
            <label>ID</label>
            <input class="form-control" readonly type="number" name="id_moneda"
              value="<?php echo $moneda->__GET('id_moneda')?>"/>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" readonly type="text" name="nombre"
              value="<?php echo $moneda->__GET('nombre')?>"/>
          </div>

          <div class="mb-3">
            <label>Simbolo</label>
            <input class="form-control" readonly type="text" name="simbolo"
              value="<?php echo $moneda->__GET('simbolo')?>"/>
          </div>

          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>
