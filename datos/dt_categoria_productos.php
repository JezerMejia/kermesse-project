<?php

include_once "data_table_template.php";
include_once "entidades/categoria_productos.php";

class DtCategoriaProductos extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_categoria_producto";
    $this->class_name = "CategoriaProductos";
    $this->primary_key = "id_categoria_producto";

    $this->db_fields = ["id_categoria_producto","nombre","descripcion","estado"];
    $this->et_fields = ["id_categoria_producto","nombre","descripcion","estado"];
  }
}
