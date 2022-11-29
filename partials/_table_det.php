<div class="card mb-4">
<?php if (!$mostrar) : ?>
  <div class="card-header">
    <a href="<?php echo "/kermesse-project/$tabla/agregar?parent_id=$id_from_url"?>">
      <button type="button" class="btn btn-outline-primary btn-sm">
        <i class="fas fa-plus"></i>
        <span>Agregar Detalle</span>
      </button>
    </a>
  </div>
<?php endif ?>
  <div class="card-body">
    <table id="tbl_usuarios" class="table table-bordered table-striped">
      <thead>
        <tr>
          <?php foreach ($encabezados as $encabezado) : ?>
            <th><?php echo ($encabezado) ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($detalles as $detalle) : ?>
          <tr>
            <?php foreach ($campos as $index => $campo) : ?>
              <td><?php echo ($detalle->__GET($campo)) ?></td>
            <?php endforeach; ?>
            <?php if (!$mostrar) : ?>
            <td>
              <a href="<?php echo ("/kermesse-project/$tabla/editar/" . $detalle->__GET($campo_id) . "?parent_id=$id_from_url") ?>" target="_self" title="Editar">
                <i class="fa-solid fa-edit"></i>
              </a>&nbsp;
              <a href="<?php echo ("/kermesse-project/$tabla/eliminar/" . $detalle->__GET($campo_id) . "?parent_id=$id_from_url")?>" target="_self" title="Eliminar">
                <i class="fa-solid fa-trash"></i>
              </a>
            </td>
            <?php endif ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>

      </tfoot>
    </table>
  </div>
</div>
