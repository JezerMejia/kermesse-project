<?php

include_once "data_table_template.php";
include_once "entidades/tasa_cambio_det.php";

class DtTasaCambioDet extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tasacambio_det";
    $this->class_name = "TasaCambioDet";
    $this->primary_key = "id_tasaCambio_det";

    $this->db_fields = ["id_tasaCambio_det","id_tasaCambio","fecha","tipoCambio"];
    $this->et_fields = ["id_tasa_cambio_det","id_tasa_cambio","fecha","tipo_cambio"];
  }
}
