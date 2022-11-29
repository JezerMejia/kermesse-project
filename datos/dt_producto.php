<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/producto.php";

class DtProducto extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_productos";
    $this->class_name = "Producto";
    $this->primary_key = "id_producto";

    $this->db_fields = ["id_producto","id_comunidad","id_cat_producto","nombre","descripcion","cantidad","preciov_sugerido","estado"];
    $this->et_fields = ["id_producto","id_comunidad","id_cat_producto","nombre","descripcion","cantidad","preciov_sugerido","estado"];
  }
}
