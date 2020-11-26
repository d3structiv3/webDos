<?php
include '../Models/Datos.php';
$db = new webdos ();

$total=$_POST['total'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$cp=$_POST['cp'];
$metodo_pago=$_POST['tipopago'];
$PizzaId=$_POST['pizzaId'];
$nombrecliente=$_POST['nombre'];
$db-> insert (
    $total,$calle,$colonia,$cp,$metodo_pago,$PizzaId,$nombrecliente
);
header('Location:../index.php');
?>