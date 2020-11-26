<?php


include '../Models/Datos.php';
$db = new webdos ();

$items=$db->getPizzas();
echo json_encode(['statuscode' => 200, 'items' => $items]);
?>