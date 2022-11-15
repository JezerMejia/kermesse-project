<?php

include "data_table_template.php";
include_once "entidades/parroquia.php";

class DtParroquia extends DataTableTemplate {

  function __construct() {
    parent::__construct();
    $this->table_name = "";
    $this->class_name = "Parroquia";
    $this->primary_key = "";

    $this->db_fields = [];
    $this->et_fields = [];
  }
}
