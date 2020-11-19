<?php


include '../Models/Datos.php';
$db = new webdos ();

$items=$db->get();
echo json_encode(['statuscode' => 200, 'items' => $items]);
?>