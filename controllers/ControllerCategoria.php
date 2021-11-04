<?php

include '../bd/autoload.php';

class ControllerCategoria {

    public function mostrarCategoria() {
        $categoria = new Categoria();
        return $categoria->MostrarCategoria();
    }

}
