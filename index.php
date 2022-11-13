<?php

$base_url = '/' . basename(__DIR__);
$req_url = $_SERVER['REQUEST_URI'];
$url = rtrim(str_replace($base_url, '', $req_url), '/');
$id_from_url = (int)filter_var($url, FILTER_SANITIZE_NUMBER_INT);

switch (true) {
  case preg_match('/^$/', $url):
    require __DIR__ . '/vistas/index.php';
    break;
  default:
    require __DIR__ . '/vistas/404.php';
    break;      
}