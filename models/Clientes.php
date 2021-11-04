<?php


class Clientes {

    private $IdCliente;
    private $Nombres;
    private $Apellidos;
    private $Dni;
    private $Telefono;
    private $Direccion;
    private $Email;
    private $Ruc;
    private $Estado;
    private $Deuda;
    
    function getIdCliente() {
        return $this->IdCliente;
    }

    function getNombres() {
        return $this->Nombres;
    }

    function getApellidos() {
        return $this->Apellidos;
    }

    function getDni() {
        return $this->Dni;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getDireccion() {
        return $this->Direccion;
    }

    function getEmail() {
        return $this->Email;
    }

    function getRuc() {
        return $this->Ruc;
    }

    function getEstado() {
        return $this->Estado;
    }

    function getDeuda() {
        return $this->Deuda;
    }

    function setIdCliente($IdCliente) {
        $this->IdCliente = $IdCliente;
    }

    function setNombres($Nombres) {
        $this->Nombres = $Nombres;
    }

    function setApellidos($Apellidos) {
        $this->Apellidos = $Apellidos;
    }

    function setDni($Dni) {
        $this->Dni = $Dni;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setRuc($Ruc) {
        $this->Ruc = $Ruc;
    }

    function setEstado($Estado) {
        $this->Estado = $Estado;
    }

    function setDeuda($Deuda) {
        $this->Deuda = $Deuda;
    }


}
