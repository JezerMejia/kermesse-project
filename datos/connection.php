<?php

class Connection {

  private $pdo;
  private static $instance = null;
  private $conn;
  private $pdo_stmt;
  private $server_name;
  private $db_name;
  private $user_name;
  private $pwd;

  private function __construct() {
    $server_name = 'localhost';
    $db_name = 'dbkermesse';
    $user_name = 'root';
    $pwd = 'Usuario123.';
    $this->pdo = new PDO("mysql:host={$server_name};dbname={$db_name}",$user_name,$pwd);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public static function getInstance() {
    if(!self::$instance) {
      self::$instance = new Connection();
    }
    return self::$instance;
  }

  public function connect() {
      return $this->pdo;
  }

  public function disconnect() {
    try {
      $pdo = null;
      return $pdo;
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }
}
