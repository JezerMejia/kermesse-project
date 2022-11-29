<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/tasa_cambio_det.php";

class DtTasaCambioDet extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tasacambio_det";
    $this->class_name = "TasaCambioDet";
    $this->primary_key = "id_tasaCambio_det";

    $this->db_fields = ["id_tasaCambio_det","id_tasaCambio","fecha","tipoCambio"];
    $this->et_fields = ["id_tasa_cambio_det","id_tasa_cambio","fecha","tipo_cambio"];
  }

  function get_by_parent_id($id) {
    $query = "SELECT * FROM " . $this->table_name . " WHERE id_tasaCambio = '$id';";
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
