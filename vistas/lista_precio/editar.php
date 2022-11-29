<?php
include('entidades/lista_precio.php');
include('datos/dt_lista_precio.php');
include('datos/dt_kermesse.php');

$dt_lista_precio = new DtListaPrecio();
$dt_kermesse = new DtKermesse();


$lista_precio = $dt_lista_precio->find_by_id($id_from_url);
$id_kermesses = $lista_precio->__GET("id_kermesse");

$kermesses = $dt_kermesse->get_data();

$page_title = 'Editar Listra precio';
$mostrar = false;
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario podrá editar los datos de la lista precio.
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Editar de la denominación
      </div>
      <div class="card-body">
        <form action="<?php echo $base_url ?>/negocio/ng_lista_precio.php" method="POST">
          <input type="hidden" value="2" name="txtaccion" id="txtaccion" />
          
          <div class="mb-3">
            <label for="nombres">ID:</label>
            <input class="form-control" type="Text" name="id_lista_precio"
            value="<?php echo $lista_precio->__GET('id_lista_precio') ?>" readonly required />
          </div>
          
          <div class="mb-3">
          <label>Kermesse:</label>
            <select class="form-control" name="id_kermesse">
              <?php foreach ($kermesses as $kermesses) : ?>
                <?php
                $ker_id = $kermesses->__GET('id_kermesse');
                $ker_name = $kermesses->__GET('nombre');
                ?>
                <option value="<?php echo $ker_id ?>" <?php echo ($id_kermesses == $ker_id) ? "selected" : "" ?>>
                  <?php echo ($ker_name) ?>
                </option>
              <?php endforeach; ?>
            </select> 
          </div>
          
          <div class="mb-3">
            <label for="apellidos">Nombre:</label>
            <input class="form-control" type="Text" name="nombre"
            value="<?php echo $lista_precio->__GET('nombre') ?>" required />
          </div>
          
          <div class="mb-3">
            <label for="pwd">Descripcion:</label>
            <input class="form-control" type="Text" name="descripcion"
            value="<?php echo $lista_precio->__GET('descripcion') ?>" required />
          </div>

          <input class="form-check-input" id="estado" type="hidden" value="1" name="estado">

          <div class="mt-4 d-flex gap-3">
            <button class="btn btn-primary" type="submit">Aceptar</button>
            <button class="btn btn-secondary" type="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
    <h2>Detalles</h2>
    <?php include_once 'vistas/lista_precio_det/mostrar.php' ?>
  </div>
</main>
<?php include('./partials/_footer.php') ?>