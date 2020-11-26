<?php


include '../Models/Datos.php';
$db = new webdos ();

$items=$db->getPizzasById($_GET['id']);
echo json_encode(['statuscode' => 200, 'items' => $items]);
?>