<?php

define("MSJ_PRIMARY", "alert-primary");
define("MSJ_SECONDARY", "alert-secondary");
define("MSJ_SUCCESS", "alert-success");
define("MSJ_DANGER", "alert-danger");
define("MSJ_WARNING", "alert-warning");

class AlertMsj {
  public string $message;
  public string $type;

  public function __GET($k) { return $this -> $k; }
  public function __SET($k, $v) { return $this -> $k = $v; }

  public function __construct(string $message, string $type) {
    $this->message = $message;
    $this->type = $type;
  }
}
