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
    
}
