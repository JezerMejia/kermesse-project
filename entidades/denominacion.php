<?php

class Denominacion {

  // Attributes
  private $id_denominacion;
  private $id_moneda;
  private $valor;
  private $valor_letras;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
