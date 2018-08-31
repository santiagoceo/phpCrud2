<?php

class Usuario {

    public function registrar($conexion, $nombre, $descripcion, $codigo, $valorUnitario){
        $query = "INSERT INTO producto (nombre, descripcion, codigo, valorUnitario)
        VALUES ('$nombre','$descripcion','$codigo','$valorUnitario');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Producto registrado";
        }else{
            $respuesta = "Problemas al registrar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM producto;";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId($conexion, $id){
        $query = "SELECT * FROM producto WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function actualizarId($conexion, $id, $nombre, $descripcion, $codigo, $valorUnitario){
        $query = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion', 
        codigo = '$codigo', valorUnitario = '$valorUnitario' WHERE id = '$id' ;";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Producto actualizado";
        }else{
            $respuesta = "Problemas al actualizar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }

    public function eliminarId($conexion, $id){
        $query = "DELETE from producto WHERE id = '$id';";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Producto eliminado";
        }else{
            $respuesta = "Problemas al eliminar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }
}