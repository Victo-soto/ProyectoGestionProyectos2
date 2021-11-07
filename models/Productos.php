<?php

class Productos {

    private $IdProducto;
    private $IdProveedor;
    private $IdCategoria;
    private $nombre;
    private $cantidad;
    private $unidadmedida;
    private $preciocompra;
    private $precioventa;
    private $descripcion;
    private $estado;

    function getIdProducto() {
        return $this->IdProducto;
    }

    function getIdProveedor() {
        return $this->IdProveedor;
    }

    function getIdCategoria() {
        return $this->IdCategoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getUnidadmedida() {
        return $this->unidadmedida;
    }

    function getPreciocompra() {
        return $this->preciocompra;
    }

    function getPrecioventa() {
        return $this->precioventa;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdProducto($IdProducto) {
        $this->IdProducto = $IdProducto;
    }

    function setIdProveedor($IdProveedor) {
        $this->IdProveedor = $IdProveedor;
    }

    function setIdCategoria($IdCategoria) {
        $this->IdCategoria = $IdCategoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setUnidadmedida($unidadmedida) {
        $this->unidadmedida = $unidadmedida;
    }

    function setPreciocompra($preciocompra) {
        $this->preciocompra = $preciocompra;
    }

    function setPrecioventa($precioventa) {
        $this->precioventa = $precioventa;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function MostrarProducto() {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        $sql = "SELECT p.idproducto,p.idproveedor,p.idcategoria,p.nombre,p.cantidad,p.unidadmedida,p.preciocompra,p.precioventa,p.descripcion,p.estado,pro.nomcompania,c.nombrecategoria "
                . " FROM productos as p inner join categorias as c ON p.idcategoria=c.idcategoria INNER JOIN proveedores as pro ON p.idproveedor=pro.idproveedor WHERE p.estado=1";
        $conexion->cerrarConexion();
        return $conn->query($sql);
    }

    function BuscarProducto($id) {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        $sql = "SELECT p.idproducto,p.idproveedor,p.idcategoria,p.nombre,p.cantidad,p.unidadmedida,p.preciocompra,p.precioventa,p.descripcion,p.estado,pro.nomcompania,c.nombrecategoria "
                . " FROM productos as p inner join categorias as c ON p.idcategoria=c.idcategoria INNER JOIN proveedores as pro ON p.idproveedor=pro.idproveedor WHERE p.estado=1 AND p.idproducto=".$id;
        $conexion->cerrarConexion();
        return $conn->query($sql);
    }

    function GuardarProducto() {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        if ((int) $this->IdProducto != 0) {
            $sql = "UPDATE productos SET "
                    . "idproveedor='" . $this->IdProveedor . "',"
                    . "idcategoria='" . $this->IdCategoria . "',"
                    . "nombre='" . $this->nombre . "',"
                    . "cantidad='" . $this->cantidad . "',"
                    . "unidadmedida='" . $this->unidadmedida . "',"
                    . "preciocompra='" . $this->preciocompra . "',"
                    . "precioventa='" . $this->precioventa . "',"
                    . "descripcion='" . $this->descripcion . "',"
                    . "estado='" . $this->estado . "'"
                    . " WHERE idproducto=" . $this->IdProducto;
        } else {
            $sql = "INSERT INTO productos(idproveedor,idcategoria,nombre,cantidad,unidadmedida,preciocompra,precioventa,descripcion,estado) VALUES "
                    . "('" . $this->IdProveedor . "',"
                    . "'" . $this->IdCategoria . "',"
                    . "'" . $this->nombre . "',"
                    . "'" . $this->cantidad . "',"
                    . "'" . $this->unidadmedida . "',"
                    . "'" . $this->preciocompra . "',"
                    . "'" . $this->precioventa . "',"
                    . "'" . $this->descripcion . "',"
                    . "'" . $this->estado . "'"
                    . ")";
        }
        $conn->query($sql);
        $conexion->cerrarConexion();
    }
    
    function EliminarProducto($id) {
        require_once '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
            $sql = "UPDATE productos SET estado=0 WHERE idproducto=".$id;
        $conn->query($sql);
        $conexion->cerrarConexion();
    }

}
