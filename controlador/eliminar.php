<?php

include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objProducto = new Producto();

echo $objProducto->eliminarId($conexion, $_POST['id']);

echo "<br><a href='../index.html'>Volver al menú</a>";