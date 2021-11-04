<?php

class Categoria {

    private $IdCategoria;
    private $NombreCategoria;
    private $Descripcion;
    private $Estado;
    
    function getIdCategoria() {
        return $this->IdCategoria;
    }

    function getNombreCategoria() {
        return $this->NombreCategoria;
    }

    function getDescripcion() {
        return $this->Descripcion;
    }

    function getEstado() {
        return $this->Estado;
    }

    function setIdCategoria($IdCategoria) {
        $this->IdCategoria = $IdCategoria;
    }

    function setNombreCategoria($NombreCategoria) {
        $this->NombreCategoria = $NombreCategoria;
    }

    function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    function setEstado($Estado) {
        $this->Estado = $Estado;
    }


    
}
