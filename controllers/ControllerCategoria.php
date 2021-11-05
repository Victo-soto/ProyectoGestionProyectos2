<?php

include '../bd/autoload.php';

class ControllerCategoria {

    public function mostrarCategoria() {
        $categoria = new Categoria();
        return $categoria->MostrarCategoria();
    }

    function BuscarCategoria($id) {
        $categoria = new Categoria();
        return $categoria->BuscarCategoria($id);
    }
    
    public function GuardarCategoria(array $datos) {
        $categoria = new Categoria();
        if (isset($datos['idcategoria'])) {
            $categoria->setIdCategoria($datos['idcategoria']);
        }
        $categoria->setNombreCategoria($datos['nombre']);
        $categoria->setDescripcion($datos['descripcion']);
        $categoria->setEstado($datos['estado']);
        $categoria->GuardarCategoria();
    }
    public function eliminarCategoria($id) {
       $categoria = new Categoria();
       return  $categoria->EliminarCategoria($id);
    }

}
