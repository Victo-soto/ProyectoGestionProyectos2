<?php


class Ventas {

    private $IdVenta;
    private $IdUsuario;
    private $IdCliente;
    private $NumBoleta;
    private $Fecha;
    private $TotalVenta;
    private $Estado;
    
    function getIdVenta() {
        return $this->IdVenta;
    }

    function getIdUsuario() {
        return $this->IdUsuario;
    }

    function getIdCliente() {
        return $this->IdCliente;
    }

    function getNumBoleta() {
        return $this->NumBoleta;
    }

    function getFecha() {
        return $this->Fecha;
    }

    function getTotalVenta() {
        return $this->TotalVenta;
    }

    function getEstado() {
        return $this->Estado;
    }

    function setIdVenta($IdVenta) {
        $this->IdVenta = $IdVenta;
    }

    function setIdUsuario($IdUsuario) {
        $this->IdUsuario = $IdUsuario;
    }

    function setIdCliente($IdCliente) {
        $this->IdCliente = $IdCliente;
    }

    function setNumBoleta($NumBoleta) {
        $this->NumBoleta = $NumBoleta;
    }

    function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    function setTotalVenta($TotalVenta) {
        $this->TotalVenta = $TotalVenta;
    }

    function setEstado($Estado) {
        $this->Estado = $Estado;
    }


}
