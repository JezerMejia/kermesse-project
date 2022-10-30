<?php

class ArqueoCajaDet {

  // Attributes
  private $id_arqueo_caja_det;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
