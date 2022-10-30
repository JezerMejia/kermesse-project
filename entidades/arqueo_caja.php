<?php

class ArqueoCaja {

  // Attributes
  private $id_arqueo_caja;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
