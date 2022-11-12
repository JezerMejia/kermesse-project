<?php

$base_url = '/' . basename(__DIR__);
$req_url = $_SERVER['REQUEST_URI'];
$url= str_replace($base_url, '', $req_url);

switch ($url) {
  case "/":
    require __DIR__ . '/vistas/index.php';
    break;
}