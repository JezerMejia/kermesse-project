<?php

class TasaCambio {

  // Attributes
  private $id_tasa_cambio;
  private $id_moneda_o;
  private $id_moneda_c;
  private $mes;
  private $anio;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
