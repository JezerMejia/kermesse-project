<?php

class Connection {

  private $pdo;
  private $pdo_stmt;
  private $server_name;
  private $db_name;
  private $user_name;
  private $pwd;

  public function connect() {
    $server_name = '4.tcp.ngrok.io:19681';
    $db_name = 'dbkermesse';
    $user_name = 'root';
    $pwd = 'Usuario123.';

    try {
      $this->pdo = new PDO("mysql:host={$server_name};dbname={$db_name}",$user_name,$pwd);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $this->pdo;
    } catch(PDOException $e) {
      die($e->getMessage());
    }
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

$con = new Connection();
$con->connect();
$con->disconnect();
