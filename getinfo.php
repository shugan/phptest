<?php
require_once("data.php");

$ArrayURL = split('/', $_SERVER[REQUEST_URI]);
$id = $ArrayURL[1]; //this will change based on directory setup in localhost
$data = new propertyData();

if (is_object($data) == true) $status = "200 OK";
$status_header = "HTTP/1.1 $status";
header($status_header);
echo json_encode( $data->getAll($id) );
?>
