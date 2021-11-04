<?php

class DetalleVenta {

    private $Cantidad;
    private $PrecioUnitario;
    private $IdVenta;
    private $IdProducto;
    
    function getCantidad() {
        return $this->Cantidad;
    }

    function getPrecioUnitario() {
        return $this->PrecioUnitario;
    }

    function getIdVenta() {
        return $this->IdVenta;
    }

    function getIdProducto() {
        return $this->IdProducto;
    }

    function setCantidad($Cantidad) {
        $this->Cantidad = $Cantidad;
    }

    function setPrecioUnitario($PrecioUnitario) {
        $this->PrecioUnitario = $PrecioUnitario;
    }

    function setIdVenta($IdVenta) {
        $this->IdVenta = $IdVenta;
    }

    function setIdProducto($IdProducto) {
        $this->IdProducto = $IdProducto;
    }


    
    
}