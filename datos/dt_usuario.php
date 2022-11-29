<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/usuario.php";

class DtUsuario extends DataTableTemplate
{

  function __construct()
  {
    parent::__construct();
    $this->table_name = "tbl_usuario";
    $this->class_name = "Usuario";
    $this->primary_key = "id_usuario";

    $this->db_fields = ["id_usuario", "usuario", "pwd", "nombres", "apellidos", "email", "estado"];
    $this->et_fields = ["id_usuario", "usuario", "pwd", "nombres", "apellidos", "email", "estado"];
  }

  function login($user, $pwd)
  {
    $query = "SELECT * FROM " . $this->table_name . " WHERE usuario = '" . $user . "' AND pwd = '" . $pwd . "';";
    try {
      $result = $this->conn->query($query);
      $result = $result->fetchAll(PDO::FETCH_OBJ);
      
      if (count($result) == 1) {
        return $this->parse_data($result)[0];
      } else {
        return NULL;
      }

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
