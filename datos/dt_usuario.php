<?php

include_once "data_table_template.php";
include_once "entidades/usuario.php";

class DtUsuario extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_usuario";
    $this->class_name = "Usuario";
    $this->primary_key = "id_usuario";

    $this->db_fields = ["id_usuario","usuario","pwd","nombres","apellidos","email","estado"];
    $this->et_fields = ["id_usuario","usuario","pwd","nombres","apellidos","email","estado"];
  }
}
