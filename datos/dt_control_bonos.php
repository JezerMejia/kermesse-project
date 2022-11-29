<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/control_bonos.php";

class DtControlBonos extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_control_bonos";
    $this->class_name = "ControlBonos";
    $this->primary_key = "id_bono";

    $this->db_fields = ["id_bono","nombre","valor","estado"];
    $this->et_fields = ["id_bono","nombre","valor","estado"];
  }
}
