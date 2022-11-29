<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/categoria_gastos.php";

class DtCategoriaGastos extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_categoria_gastos";
    $this->class_name = "CategoriaGastos";
    $this->primary_key = "id_categoria_gastos";

    $this->db_fields = ["id_categoria_gastos","nombre_categoria","descripcion","estado"];
    $this->et_fields = ["id_categoria_gastos","nombre_categoria","descripcion","estado"];
  }
}
