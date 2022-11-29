<?php

$now = new DateTime();
$current_date = $now->format("Y-m-d H:i:s");

$data = [
  "id" => $id_from_url,
  "usuario_eliminacion" => $logged_user->__GET("id_usuario"),
  "fecha_eliminacion" => $current_date,
  "delete" => true,
];
$sesname = session_name();
$sesval = session_id();

$curl = curl_init($negocio_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLINFO_HEADER_OUT, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_COOKIE, "$sesname=$sesval");

session_write_close();
$result = curl_exec($curl);
if ($result === FALSE) {
  die("Curl error: " . curl_error($curl));
}
curl_close($curl);
$redirect_url = curl_getinfo($curl, CURLINFO_REDIRECT_URL);

header("Location: $redirect_url");
