<?php

class Gasto {

  // Attributes
  private $id_gasto;
  private $id_kermesse;
  private $id_cat_gastos;
  private $fecha_gasto;
  private $concepto;
  private $monto;
  private $usuario_creacion;
  private $fecha_creacion;
  private $usuario_modificacion;
  private $fecha_modificacion;
  private $usuario_eliminacion;
  private $fecha_eliminacion;
  private $estado;

  // Methods
  public function __GET($k){ return $this -> $k; }
  public function __SET($k, $v) { $this -> $k = $v; }
}
