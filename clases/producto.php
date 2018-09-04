<?php

class Producto {

    public function registrar($conexion, $nombre, $descripcion, $codigo, $valorUnitario){
        $query = "CALL crear_producto('$nombre','$descripcion','$codigo','$valorUnitario');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Producto registrado";
        }else{
            $respuesta = "Problemas al registrar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }

    public function consultar($conexion){
        $query = "CALL consultar_producto";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId($conexion, $id){
        $query = "CALL consultar_producto_id('$id')";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function actualizarId($conexion, $id, $nombre, $descripcion, $codigo, $valorUnitario){
        $query = "CALL actualizar_id('$id','$nombre','$descripcion','$codigo','$valorUnitario');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Producto actualizado";
        }else{
            $respuesta = "Problemas al actualizar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }

    public function eliminarId($conexion, $id){
        $query = "CALL eliminar_id('$id');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Producto eliminado";
        }else{
            $respuesta = "Problemas al eliminar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }
}