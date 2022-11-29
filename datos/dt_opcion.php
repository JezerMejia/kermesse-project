<?php

include_once "data_table_template.php";
include_once "entidades/opcion.php";

class DtOpcion extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_opciones";
    $this->class_name = "Opcion";
    $this->primary_key = "id_opciones";

    $this->db_fields = ["id_opciones","opcion_descripcion","estado"];
    $this->et_fields = ["id_opcion","descripcion","estado"];
  }

  function get_by_user_id($user_id) {
    $query = "SELECT tbl_opciones.*
    FROM tbl_opciones
    INNER JOIN rol_opciones
    ON rol_opciones.tbl_opciones_id_opciones = tbl_opciones.id_opciones
    INNER JOIN tbl_rol
    ON tbl_rol.id_rol = rol_opciones.tbl_rol_id_rol
    INNER JOIN rol_usuario
    ON rol_usuario.tbl_rol_id_rol = tbl_rol.id_rol
    INNER JOIN tbl_usuario
    ON tbl_usuario.id_usuario = rol_usuario.tbl_usuario_id_usuario 
    WHERE tbl_usuario.id_usuario = $user_id;";

    try {
      $result = $this->conn->query($query);
      $result = $result->fetchAll(PDO::FETCH_OBJ);

      if (count($result) > 0) {
        return $this->parse_data($result);
      } else {
        return [];
      }

      return $result->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
