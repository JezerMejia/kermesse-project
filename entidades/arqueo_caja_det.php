<?php

class ArqueoCajaDet {

  // Attributes
  private $id_arqueo_caja_det;
  private $id_arqueo_caja;
  private $id_moneda;
  private $id_denominacion;
  private $cantidad;
  private $subtotal;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
