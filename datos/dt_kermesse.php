<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/kermesse.php";

class DtKermesse extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_kermesse";
    $this->class_name = "Kermesse";
    $this->primary_key = "id_kermesse";

    $this->db_fields = ["id_kermesse","idParroquia","nombre","fInicio","fFinal","descripcion","estado","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion"];
    $this->et_fields = ["id_kermesse","id_parroquia","nombre","fecha_inicio","fecha_final","descripcion","estado","usuario_creacion","fecha_creacion","usuario_modificacion","fecha_modificacion","usuario_eliminacion","fecha_eliminacion"];
  }
}
