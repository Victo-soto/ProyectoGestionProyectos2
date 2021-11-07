<?php

include '../bd/autoload.php';

class ControllerProveedores {

        public function mostrarProveedor() {
        $proveedor = new Proveedores();
        return $proveedor->MostrarProveedor();
    }

}
