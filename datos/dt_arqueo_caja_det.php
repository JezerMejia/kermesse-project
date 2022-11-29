<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/arqueo_caja_det.php";

class DtArqueoCajaDet extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_arqueocaja_det";
    $this->class_name = "ArqueoCajaDet";
    $this->primary_key = "idArqueoCaja_Det";

    $this->db_fields = ["idArqueoCaja_Det","idArqueoCaja","idMoneda","idDenominacion","cantidad","subtotal"];
    $this->et_fields = ["id_arqueo_caja_det","id_arqueo_caja","id_moneda","id_denominacion","cantidad","subtotal"];
  }
  
  function get_by_parent_id($id) {
    $query = "SELECT * FROM " . $this->table_name . " WHERE idArqueoCaja = '$id';";
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
