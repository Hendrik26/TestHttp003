<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$json = file_get_contents("php://input");
$file = fopen('json.txt', 'w+');
fwrite($file, $json);
fclose($file);
?>
