<?php

class CategoriaGastos {

  // Attributes
  private $id_categoria_gastos;


  // Methods
  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v) { return $this -> $k = $v; }
}
