<div class="card mb-4">
  <div class="card-header">
    <a href="<?php echo ("$base_url$url/agregar") ?>">
      <button type="button" class="btn btn-outline-primary btn-sm">
        <i class="fas fa-plus"></i>
        <span>Agregar <?php echo ($page_title) ?></span>
      </button>
    </a>
  </div>
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
        <?php foreach ($datos as $dato) : ?>
          <tr>
            <?php foreach ($campos as $index => $campo) : ?>
              <td><?php echo ($dato->__GET($campo)) ?></td>
            <?php endforeach; ?>
            <td>
              <a href="<?php echo ("$base_url$url/" . $dato->__GET($campo_id)) ?>" target="_self" title="Mostrar">
                <i class="fa-solid fa-eye"></i>
              </a>&nbsp;
              <a href="<?php echo ("$base_url$url/editar/" . $dato->__GET($campo_id)) ?>" target="_self" title="Editar">
                <i class="fa-solid fa-edit"></i>
              </a>&nbsp;
              <a href="<?php echo ("$base_url$url/eliminar/" . $dato->__GET($campo_id))?>" target="_self" title="Eliminar">
                <i class="fa-solid fa-trash"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>

      </tfoot>
    </table>
  </div>
</div>
