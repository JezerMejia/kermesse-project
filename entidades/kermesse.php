<?php

class Kermesse {

  // Attributes
  private $id_kermesse;
  private $id_parroquia;
  private $nombre;
  private $fecha_inicio;
  private $fecha_final;
  private $descripcion;
  private $estado;
  private $usuario_creacion;
  private $fecha_creacion;
  private $usuario_modificacion;
  private $fecha_modificacion;
  private $usuario_eliminacion;
  private $fecha_eliminacion;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
