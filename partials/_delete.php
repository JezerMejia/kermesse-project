<?php

$data = [
  "id" => $id_from_url,
  "delete" => true,
];

$curl = curl_init($negocio_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLINFO_HEADER_OUT, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
if ($result === FALSE) {
  die("Curl error: " . curl_error($curl));
}
curl_close($curl);
$redirect_url = curl_getinfo($curl, CURLINFO_REDIRECT_URL);

header("Location: $redirect_url");
