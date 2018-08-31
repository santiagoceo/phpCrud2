<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objUsuario = new Usuario();

echo $objUsuario->actualizarId($conexion, $_POST['id'], $_POST['nombre'], $_POST['descripcion'],
$_POST['codigo'], $_POST['valorUnitario']);

echo "<br><a href='../index.html'>Volver al menú</a>";