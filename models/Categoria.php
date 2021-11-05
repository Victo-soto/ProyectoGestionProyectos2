<?php


class Categoria {
    private $idCategoria;
    private $nombreCategoria;
    private $descripcion;
    private $estado;
    
    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdCategoria($idCategoria): void {
        $this->idCategoria = $idCategoria;
    }

    function setNombreCategoria($nombreCategoria): void {
        $this->nombreCategoria = $nombreCategoria;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }


    function MostrarCategoria() {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        $sql = "SELECT * FROM categorias where estado=1 ";
        $conexion->cerrarConexion();
        return $conn->query($sql);
    }
    
    function BuscarCategoria($id) {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        $sql = "SELECT * FROM categorias WHERE idcategoria=" . $id;
        $conexion->cerrarConexion();
        return $conn->query($sql);
    }
    
    function GuardarCategoria() {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        if ((int) $this->idCategoria != 0) {
            $sql = "UPDATE categorias SET "
                    . "nombrecategoria='" . $this->nombreCategoria . "',"
                    . "descripcion='" . $this->descripcion . "',"
                    . "estado='" . $this->estado . "'"
                    . " WHERE idcategoria=" . $this->idCategoria;
        } else {
            $sql = "INSERT INTO categorias(nombrecategoria,descripcion,estado) VALUES "
                    . "('" . $this->nombreCategoria . "',"
                    . "'" . $this->descripcion . "',"
                    . "'" . $this->estado . "'"
                    . ")";
        }
        $conn->query($sql);
        $conexion->cerrarConexion();
    }
    
    function EliminarCategoria($id) {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
            $sql = "UPDATE categorias SET estado=0 WHERE idcategoria=".$id;
        $conn->query($sql);
        $conexion->cerrarConexion();
    }
}
