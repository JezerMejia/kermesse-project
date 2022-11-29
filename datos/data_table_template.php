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
    $has_estado_query = "SHOW COLUMNS FROM $this->table_name LIKE 'estado';";
    $query = "SELECT * FROM $this->table_name WHERE estado != 3;";

    try {
      $p = $this->conn->prepare($has_estado_query);
      $p->execute();

      $result = $p->rowCount();
      echo "COLUMNAS: $result";

      if ($result == 0) {
        $query = "SELECT * FROM $this->table_name;";
      }
    } catch (Exception $e) {
      die($e->getMessage());
    }

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

    $fields = [];
    $values = [];

    for ($i = 0; $i < count($db_fields); $i++) {
      if($entity->__GET($et_fields[$i])) {
        array_push($fields, $db_fields[$i]);
        array_push($values, $et_fields[$i]);
      }
    }

    $fields_string = implode(",", $fields);
    $values_string = implode(",", array_map($get_values, $values));
    $query = "INSERT INTO $this->table_name ($fields_string) VALUES ($values_string)";
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
    $primary_value = $entity->__GET($this->et_fields[0]);
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
    if (count($columns) == 0) return;

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

    $query = "UPDATE $this->table_name SET estado=3 WHERE $this->primary_key=$id";
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
    $entity->__SET("estado", 3);

    if ($_POST) {
      if (property_exists($entity, "usuario_eliminacion")) {
        $entity->__SET("usuario_eliminacion", $_POST["usuario_eliminacion"]);
      }
      if (property_exists($entity, "fecha_eliminacion")) {
        $entity->__SET("fecha_eliminacion", $_POST["fecha_eliminacion"]);
      }
    }

    $this->update($entity);
  }
}
