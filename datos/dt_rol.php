<?php

include "data_table_template.php";
include_once "entidades/rol.php";

class DtRol extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_rol";
    $this->class_name = "Rol";
    $this->primary_key = "id_rol";

    $this->db_fields = ["id_rol","descripcion","estado"];
    $this->et_fields = ["id_rol","descripcion","estado"];
  }
}
