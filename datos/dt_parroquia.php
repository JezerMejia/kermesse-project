<?php

include_once "data_table_template.php";
include_once "entidades/parroquia.php";

class DtParroquia extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_parroquia";
    $this->class_name = "Parroquia";
    $this->primary_key = "idParroquia";

    $this->db_fields = ['idParroquia', 'nombre', 'direccion', 'telefono', 'parroco', 'logo', 'sitio_web'];
    $this->et_fields = ['id_parroquia', 'nombre', 'direccion', 'telefono', 'parroco', 'logo', 'sitio_web'];
  }
}
