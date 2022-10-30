<?php

class ControlBonos {

  // Attributes
  private $id_bono;
  private $nombre;
  private $valor;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
