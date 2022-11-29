<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/ingreso_comunidad_det.php";

class DtIngresoComunidadDet extends DataTableTemplate
{

  function __construct()
  {
    parent::__construct();
    $this->table_name = "tbl_ingreso_comunidad_det";
    $this->class_name = "IngresoComunidadDet";
    $this->primary_key = "id_ingreso_comunidad_det";

    $this->db_fields = ["id_ingreso_comunidad_det", "id_ingreso_comunidad", "id_bono", "denominacion", "cantidad", "subtotal_bono"];
    $this->et_fields = ["id_ingreso_comunidad_det", "id_ingreso_comunidad", "id_bono", "denominacion", "cantidad", "subtotal_bono"];
  }

  function get_by_parent_id($id)
  {
    $query = "SELECT * FROM " . $this->table_name . " WHERE id_ingreso_comunidad = '$id';";
    try {
      $result = $this->conn->query($query);
      $result = $result->fetchAll(PDO::FETCH_OBJ);

      if (count($result) > 0) {
        return $this->parse_data($result);
      } else {
        return [];
      }
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
