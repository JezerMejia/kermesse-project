<?php

class ArqueoCaja {

  // Attributes
  private $id_arqueo_caja;
  private $id_kermesse;
  private $fecha_arqueo;
  private $gran_total;
  private $usuario_creacion;
  private $fecha_creacion;
  private $usuario_modificacion;
  private $fecha_modificacion;
  private $usuario_eliminacion;
  private $fecha_eliminacion;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
