<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/tasa_cambio.php";

class DtTasaCambio extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_tasacambio";
    $this->class_name = "TasaCambio";
    $this->primary_key = "id_tasaCambio";

    $this->db_fields = ["id_tasaCambio","id_monedaO","id_monedaC","mes","anio","estado"];
    $this->et_fields = ["id_tasa_cambio","id_moneda_o","id_moneda_c","mes","anio","estado"];
  }
}
