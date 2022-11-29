<?php

$page_title = 'Agregar Control Bono';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title") ?></h1>

    <div class="card mb-4">
      <div class="card-body">
        En este formulario se agregaran datos a Control Bonos.
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Agregar el control de bonos
      </div>
      <div class="card-body">
        <form form action="<?php echo $base_url ?>/negocio/ng_control_bonos.php" method="POST">
          <div class="mb-3">
            <label>Nombre:</label>
            <input class="form-control" type="text" name="nombre" required />
          </div>
          <div class="mb-3">
            <label>Valor:</label>
            <input class="form-control" type="Text" name="valor" required />
          </div>

          <input name="estado" type="hidden" value="1">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Aceptar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>