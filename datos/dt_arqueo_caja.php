<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/arqueo_caja.php";

class DtArqueoCaja extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_arqueocaja";
    $this->class_name = "ArqueoCaja";
    $this->primary_key = "id_ArqueoCaja";

    $this->db_fields = ["id_ArqueoCaja","idKermesse","fechaArqueo","granTotal","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion","estado"];
    $this->et_fields = ["id_arqueo_caja","id_kermesse","fecha_arqueo","gran_total","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion","estado"];
  }
}
