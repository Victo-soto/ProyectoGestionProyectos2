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
        $sql = "SELECT * FROM categorias ";
        $conexion->cerrarConexion();
        return $conn->query($sql);
    }
}
