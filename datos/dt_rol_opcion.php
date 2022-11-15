<?php

include_once "data_table_template.php";
include_once "entidades/rol_opcion.php";

class DtRolOpcion extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "rol_opciones";
    $this->class_name = "RolOpcion";
    $this->primary_key = "id_rol_opciones";

    $this->db_fields = ["id_rol_opciones","tbl_rol_id_rol","tbl_opciones_id_opciones"];
    $this->et_fields = ["id_rol_opcion","id_rol","id_opcion"];
  }
}
