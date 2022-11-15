<?php

include "connection.php";

class DataTableTemplate {
  public $conn;

  public $class_name;
  public $table_name;
  public $primary_key;

  public $db_fields;
  public $et_fields;

  protected function __construct() {
    $this->table_name = "";

    $conn = new Connection();
    $this->conn = $conn->connect();
  }

  protected function fetch_all() {
    $query = "SELECT * FROM " . $this->table_name . ";";

    try {
      $result = $this->conn->query($query);

      return $result->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
  protected function fetch_by_id($id) {
    $query = "SELECT * FROM $this->table_name WHERE $this->primary_key = $id;";

    try {
      $result = $this->conn->query($query);

      return $result->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  protected function parse_data($data) {
    $result = [];

    foreach ($data as $row) {
      $instance = new $this->class_name();

      for ($i = 0; $i < count($this->db_fields); $i++) {
        $db_field = $this->db_fields[$i];
        $et_field = $this->et_fields[$i];

        $db_value = $row->$db_field;
        $instance->__SET($et_field, $db_value);
      }

      array_push($result, $instance);
    }
    return $result;
  }

  public function get_data() {
    $data = $this->fetch_all();
    $result = $this->parse_data($data);
    return $result;
  }

  public function find_by_id($id) {
    $data = $this->fetch_by_id($id);
    $result = $this->parse_data($data);

    if (count($result) == 1) {
      return $result[0];
    } else {
      return NULL;
    }
  }
}
