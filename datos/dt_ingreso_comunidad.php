<?php

include "data_table_template.php";
include_once "entidades/ingreso_comunidad.php";

class DtIngresoComunidad extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_ingreso_comunidad";
    $this->class_name = "IngresoComunidad";
    $this->primary_key = "id_ingreso_comunidad";

    $this->db_fields = ["id_ingreso_comunidad","id_kermesse","id_comunidad","id_producto","cant_productos","total_bonos","estado","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion"];
    $this->et_fields = ["id_ingreso_comunidad","id_kermesse","id_comunidad","id_producto","cant_productos","total_bonos","estado","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion"];
  }
}
