<?php

include '../bd/autoload.php';

class ControllerProductos {

    public function mostrarProducto() {
        $producto = new Productos();
        return $producto->MostrarProducto();
    }
    
    function BuscarProducto($id) {
        $producto = new Productos();
        return $producto->BuscarProducto($id);
    }
    
    public function GuardarProducto(array $datos) {
        $producto = new Productos();
        if (isset($datos['idproducto'])) {
            $producto->setIdProducto($datos['idproducto']);
        }
        $producto->setIdProveedor($datos['idproveedor']);
        $producto->setIdCategoria($datos['idcategoria']);
        $producto->setNombre($datos['nombre']);
        $producto->setCantidad($datos['cantidad']);
        $producto->setUnidadmedida($datos['unidadmedida']);
        $producto->setPreciocompra($datos['preciocompra']);
        $producto->setPrecioventa($datos['precioventa']);
        $producto->setDescripcion($datos['descripcion']);
        $producto->setEstado($datos['estado']);
        $producto->GuardarProducto();
    }
    
    public function eliminarProducto($id) {
        $producto = new Productos();
        return $producto->EliminarProducto($id);
    }

}
