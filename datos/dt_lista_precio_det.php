<?php

include_once "data_table_template.php";
include_once "entidades/lista_precio_det.php";

class DtListaPrecioDet extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_listaprecio_det";
    $this->class_name = "ListaPrecioDet";
    $this->primary_key = "id_listaprecio_det";

    $this->db_fields = ["id_listaprecio_det","id_lista_precio","id_producto","precio_venta"];
    $this->et_fields = ["id_lista_precio_det","id_lista_precio","id_producto","precio_venta"];
  }
}
