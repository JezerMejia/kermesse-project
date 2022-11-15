<?php

include "data_table_template.php";
include_once "entidades/denominacion.php";

class DtDenominacion extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_denominacion";
    $this->class_name = "Denominacion";
    $this->primary_key = "id_Denominacion";

    $this->db_fields = ["id_denominacion","id_moneda","valor","valor_letras","estado"];
    $this->et_fields = ["id_Denominacion","idMoneda","valor","valor_letras","estado"];
  }
}
