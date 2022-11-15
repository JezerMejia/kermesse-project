<?php

include "data_table_template.php";
include "../entidades/producto.php";

class DtProducto extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_productos";
    $this->class_name = "Producto";
    $this->primary_key = "id_producto";

    $this->db_fields = [
      "id_producto",
      "nombre"
    ];
    $this->et_fields = [
      "id_producto",
      "nombre"
    ];
  }
}

//$dt_producto = new DtProducto();
//$data = $dt_producto->get_data();

//echo "</br>";
//foreach ($data as $d) {
  //echo $d . "</br>";
//}

//$val = $dt_producto->find_by_id(1);

//echo $val;
