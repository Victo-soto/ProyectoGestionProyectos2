<?php

class Entradas {

    private $IdEntrada;
    private $NumFactura;
    private $Fecha;
    private $TotalCompra;
    private $IdUsuario;
    private $IdProveedor;
    
    function getIdEntrada() {
        return $this->IdEntrada;
    }

    function getNumFactura() {
        return $this->NumFactura;
    }

    function getFecha() {
        return $this->Fecha;
    }

    function getTotalCompra() {
        return $this->TotalCompra;
    }

    function getIdUsuario() {
        return $this->IdUsuario;
    }

    function getIdProveedor() {
        return $this->IdProveedor;
    }

    function setIdEntrada($IdEntrada) {
        $this->IdEntrada = $IdEntrada;
    }

    function setNumFactura($NumFactura) {
        $this->NumFactura = $NumFactura;
    }

    function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    function setTotalCompra($TotalCompra) {
        $this->TotalCompra = $TotalCompra;
    }

    function setIdUsuario($IdUsuario) {
        $this->IdUsuario = $IdUsuario;
    }

    function setIdProveedor($IdProveedor) {
        $this->IdProveedor = $IdProveedor;
    }


    
    
}
