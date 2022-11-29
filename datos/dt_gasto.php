<?php

include_once "data_table_template.php";
include_once "../entidades/gasto.php";

class DtGasto extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_gastos";
    $this->class_name = "Gasto";
    $this->primary_key = "id_registro_gastos";

    $this->db_fields = ["id_registro_gastos","idKermesse","idCatGastos","fechaGasto","concepto","monto","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion","estado"];
    $this->et_fields = ["id_gasto","id_kermesse","id_cat_gastos","fecha_gasto","concepto","monto","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion","estado"];
  }
}
