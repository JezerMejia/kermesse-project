<?php

class TasaCambio {

  // Attributes
  private $id_tasa_cambio;
  private $id_moneda;
  private $id_monedaO;
  private $id_monedaC;
  private $mes;
  private $anio;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
