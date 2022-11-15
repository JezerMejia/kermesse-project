<?php

include "data_table_template.php";
include_once "entidades/comunidad.php";

class DtComunidad extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "tbl_comunidad";
    $this->class_name = "Comunidad";
    $this->primary_key = "id_comunidad";

    $this->db_fields = ["id_comunidad","nombre","responsable","desc_contribucion","estado"];
    $this->et_fields = ["id_comunidad","nombre","responsable","desc_contribucion","estado"];
  }
}
