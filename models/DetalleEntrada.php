<?php

class DetalleEntrada {

    private $Cantidad;
    private $Precio;
    private $IdEntrada;
    private $IdProducto;
    
    function getCantidad() {
        return $this->Cantidad;
    }

    function getPrecio() {
        return $this->Precio;
    }

    function getIdEntrada() {
        return $this->IdEntrada;
    }

    function getIdProducto() {
        return $this->IdProducto;
    }

    function setCantidad($Cantidad) {
        $this->Cantidad = $Cantidad;
    }

    function setPrecio($Precio) {
        $this->Precio = $Precio;
    }

    function setIdEntrada($IdEntrada) {
        $this->IdEntrada = $IdEntrada;
    }

    function setIdProducto($IdProducto) {
        $this->IdProducto = $IdProducto;
    }

    
}
