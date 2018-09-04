<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objProducto = new Producto();

echo $objProducto->registrar($conexion, $_POST['nombre'], $_POST['descripcion'],
$_POST['codigo'], $_POST['valorUnitario']);

echo "<br><a href='../index.html'>Volver al menú</a>";
