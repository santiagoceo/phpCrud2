<?php
    include 'clases/conexion.php';
    include 'clases/producto.php';

    $objConexion = new Conexion();
    $objProducto = new Producto();

    $conexion = $objConexion->conectar();
    $datos = $objProducto->consultar($conexion);
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
        <h2>Consultar producto</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Código</th>
                <th>Valor Unitario</th>
            </tr>
            <?php
                while($dato = mysqli_fetch_array($datos)){
            ?>
            <tr>
                <td><?php echo $dato['id'] ?></td>
                <td><?php echo $dato['nombre'] ?></td>
                <td><?php echo $dato['descripcion'] ?></td>
                <td><?php echo $dato['codigo'] ?></td>
                <td><?php echo $dato['valorUnitario'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br><a href='index.html'>Volver al menú</a>
    </body>
</html>