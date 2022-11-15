<?php

include "data_table_template.php";
include_once "entidades/opcion.php";

class DtOpcion extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_opciones";
    $this->class_name = "Opcion";
    $this->primary_key = "id_opciones";

    $this->db_fields = ["id_opcion","descripcion","estado"];
    $this->et_fields = ["id_opcion","descripcion","estado"];
  }
}
