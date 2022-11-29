<?php
include('entidades/lista_precio.php');
include('datos/dt_lista_precio.php');
include('datos/dt_kermesse.php');

$dt_lista_precio = new DtListaPrecio();
$dt_kermesse = new DtKermesse();


$lista_precio = $dt_lista_precio->find_by_id($id_from_url);
$id_kermesse = $lista_precio->__GET("id_kermesse");

$kermesses = $dt_kermesse->get_data();

$page_title = 'Editar Listra precio';
?>

<?php include('./partials/_nav.php') ?>
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo ("$page_title - $id_from_url") ?></h1>
    <div class="card mb-4">
      <div class="card-body">
        En este formulario se podrá visualizar los datos de la lista de los precios.
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <!---->
        <form>
          <div class="mb-3">
            <label for="exampleFormControlInput1">ID</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="id" placeholder="ID"
            value="<?php echo $lista_precio->__GET('id_lista_precio') ?>" disabled />
          </div>

          <div class="mb-3">
          <label>Kermesse</label>
            <select class="form-control" name="id_kermesse">
              <?php foreach ($kermesses as $kermesse) : ?>
                <?php
                  $ker_id = $kermesse->__GET('id_kermesse');
                  $ker_name = $kermesse->__GET('nombre');
                ?>
                <option value="<?php echo $ker_id?>"
                  <?php echo ($id_kermesse == $ker_id) ? "selected" : ""?>>
                  <?php echo ($ker_name) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Nombre</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="nombre" placeholder="Nombre"
            value="<?php echo $lista_precio->__GET('nombre') ?>" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Descripcion</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="descripcion" placeholder="Descripcion"
            value="<?php echo $lista_precio->__GET('descripccion') ?>" disabled />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1">Estado</label>
            <input class="form-control form-control-solid" id="exampleFormControlInput1" type="estado" placeholder="Estado" disabled />
          </div>
        </form>
        <!---->
      </div>
    </div>
  </div>
</main>
<?php include('./partials/_footer.php') ?>