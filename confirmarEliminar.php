<?php

include 'clases/conexion.php';
include 'clases/usuario.php';

$objConexion = new conexion();
$objUsuario = new usuario();

$conexion = $objConexion->conectar();
$datos = $objUsuario->consultaId($conexion, $_GET['id']);

$id;
$nombre;
$descripcion;
$codigo;
$valorUnitario;

while($dato = mysqli_fetch_array($datos)){
    $id = $dato['id'];
    $nombre = $dato['nombre'];
    $descripcion = $dato['descripcion'];
    $codigo = $dato['codigo'];
    $valorUnitario = $dato['valorUnitario'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>
<body>
    <h1>Este es el producto que vas a eliminar</h1>
    <form action="./controlador/eliminar.php" method="post">
        <input type="hidden" name="id" id="" value="<?php echo $id ?>">
        <label for="">Nombre: </label>
        <input type="text" name="nombre" id="" value="<?php echo $nombre ?>" disabled> <br>
        <label for="">Descripción: </label>
        <textarea name="descripcion" id="" disabled><?php echo $descripcion ?></textarea> <br>
        <label for="">Código: </label>
        <input type="text" name="codigo" id="" value="<?php echo $codigo ?>" disabled> <br>
        <label for="">Valor unitario: </label>
        <input type="text" name="valorUnitario" id="" value="<?php echo $valorUnitario ?>" disabled> <br>
        <input type="submit" value="Confirmar Eliminar">
    </form>
    <br><a href='index.html'>Volver al menú</a>
</body>
</html>