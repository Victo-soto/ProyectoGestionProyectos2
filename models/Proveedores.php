<?php

class Proveedores {

    private $IdProveedor;
    private $NomCompania;
    private $Direccion;
    private $Ciudad;
    private $Region;
    private $Pais;
    private $Telefono;
    private $PaginaPrincipal;
    private $Estado;
    
    function getIdProveedor() {
        return $this->IdProveedor;
    }

    function getNomCompania() {
        return $this->NomCompania;
    }

    function getDireccion() {
        return $this->Direccion;
    }

    function getCiudad() {
        return $this->Ciudad;
    }

    function getRegion() {
        return $this->Region;
    }

    function getPais() {
        return $this->Pais;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getPaginaPrincipal() {
        return $this->PaginaPrincipal;
    }

    function getEstado() {
        return $this->Estado;
    }

    function setIdProveedor($IdProveedor) {
        $this->IdProveedor = $IdProveedor;
    }

    function setNomCompania($NomCompania) {
        $this->NomCompania = $NomCompania;
    }

    function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }

    function setCiudad($Ciudad) {
        $this->Ciudad = $Ciudad;
    }

    function setRegion($Region) {
        $this->Region = $Region;
    }

    function setPais($Pais) {
        $this->Pais = $Pais;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setPaginaPrincipal($PaginaPrincipal) {
        $this->PaginaPrincipal = $PaginaPrincipal;
    }

    function setEstado($Estado) {
        $this->Estado = $Estado;
    }


    
}
