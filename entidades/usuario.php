<?php

class Usuario {

  // Attributes
  private $id_usuario;
  private $usuario;
  private $pwd;
  private $nombres;
  private $apellidos;
  private $email;
  private $estado;

  // Methods
  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }

  public function get_full_name() { return "$this->nombres $this->apellidos"; }
}
