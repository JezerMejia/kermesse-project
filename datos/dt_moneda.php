<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/moneda.php";

class DtMoneda extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_moneda";
    $this->class_name = "Moneda";
    $this->primary_key = "id_moneda";

    $this->db_fields = ["id_moneda","nombre","simbolo","estado"];
    $this->et_fields = ["id_moneda","nombre","simbolo","estado"];
  }
}
