<?php

include_once "data_table_template.php";
include_once "entidades/ingreso_comunidad_det.php";

class DtIngresoComunidadDet extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_ingreso_comunidad_det";
    $this->class_name = "IngresoComunidadDet";
    $this->primary_key = "id_ingreso_comunidad_det";

    $this->db_fields = ["id_ingreso_comunidad_det","id_ingreso_comunidad","id_bono","denominacion","cantidad","subtotal_bono"];
    $this->et_fields = ["id_ingreso_comunidad_det","id_ingreso_comunidad","id_bono","denominacion","cantidad","subtotal_bono"];
  }
}
