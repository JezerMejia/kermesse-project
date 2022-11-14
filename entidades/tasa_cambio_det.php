<?php

class TasaCambioDet {

  // Attributes
  private $id_tasa_cambio_det;
  private $id_tasa_cambio;
  private $fecha;
  private $tipo_cambio;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
