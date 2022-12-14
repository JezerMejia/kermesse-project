<?php

include_once dirname(__DIR__) . "/datos/data_table_template.php";
include_once dirname(__DIR__) . "/entidades/lista_precio.php";

class DtListaPrecio extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_lista_precio";
    $this->class_name = "ListaPrecio";
    $this->primary_key = "id_lista_precio";

    $this->db_fields = ["id_lista_precio","id_kermesse","nombre","descripcion","estado"];
    $this->et_fields = ["id_lista_precio","id_kermesse","nombre","descripcion","estado"];
  }
}
