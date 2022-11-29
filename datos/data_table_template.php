<?php

include_once "connection.php";

class DataTableTemplate {
  public $conn;

  public $class_name;
  public $table_name;
  public $primary_key;

  public $db_fields;
  public $et_fields;

  protected function __construct() {
    $this->table_name = "";

    $conn = Connection::getInstance();
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

  public function insert($entity) {

    $get_values = function($field) use($entity){
      $value = $entity->__GET($field);
      return "'$value'";
    };
    $db_fields = $this->db_fields;
    array_shift($db_fields);
    $et_fields = $this->et_fields;
    array_shift($et_fields);

    $fields = implode(",", $db_fields);
    $values = implode(",", array_map($get_values, $et_fields));
    $query = "INSERT INTO $this->table_name ($fields) VALUES ($values)";
    echo $query;
    try {
      $this->conn->query($query);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function update($entity) {
    if (is_null($entity)) {
      throw new Exception("UPDATE: Entity is null");
    }
    $primary_value = $entity->__GET($this->primary_key);
    $found_entity = $this->find_by_id($primary_value);

    if (is_null($found_entity)) {
      throw new Exception("UPDATE: Could not find entity of table '$this->table_name'");
    }

    $parse_update = function(string $column, $value) use($entity) {
      return "$column='$value'";
    };
    $columns = [];
    $values = [];

    $db_fields = $this->db_fields;
    array_shift($db_fields);
    $et_fields = $this->et_fields;
    array_shift($et_fields);

    for ($i = 0; $i < count($db_fields); $i++) {
      $db_field = $db_fields[$i];
      $et_field = $et_fields[$i];

      if ($db_field == $this->primary_key) continue;

      $old_value = $found_entity->__GET($et_field);
      $new_value = $entity->__GET($et_field);

      if ($old_value == $new_value) continue;

      array_push($columns, $db_field);
      array_push($values, $new_value);
    }
    if (count($columns) == 0) {
      throw new Exception("UPDATE: There is no data to be updated");
    }

    $assignment = implode(",", array_map($parse_update, $columns, $values));
    $query = "UPDATE $this->table_name SET $assignment WHERE $this->primary_key=$primary_value;";

    try {
      $this->conn->query($query);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function delete_by_id(int $id) {
    $found_entity = $this->find_by_id($id);

    if (is_null($found_entity)) {
      throw new Exception("DELETE: Could not find entity of table '$this->table_name'");
    }

    $query = "DELETE FROM $this->table_name WHERE $this->primary_key=$id;";
    try {
      $this->conn->query($query);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function delete($entity) {
    if (is_null($entity)) {
      throw new Exception("DELETE: Entity is null");
    }
    $primary_value = $entity->__GET($this->primary_key);
    $this->delete_by_id($primary_value);
  }
}
