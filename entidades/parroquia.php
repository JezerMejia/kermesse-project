<?php

class Parroquia {

  // Attributes
  private $id_parroquia;
  private $nombre;
  private $direccion;
  private $telefono;
  private $parroco;
  private $logo;
  private $sitio_web;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
