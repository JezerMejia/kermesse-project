<?php

include_once "data_table_template.php";
include_once "entidades/rol_usuario.php";

class DtRolUsuario extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "rol_usuario";
    $this->class_name = "RolUsuario";
    $this->primary_key = "id_rol_usuario";

    $this->db_fields = ["id_rol_usuario","tbl_usuario_id_usuario","tbl_rol_id_rol"];
    $this->et_fields = ["id_rol_usuario","id_usuario","id_rol"];
  }
}
