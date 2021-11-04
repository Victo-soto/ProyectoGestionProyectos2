<?php

class Usuario {
    private $IdUsuario;
    private $Nombres;
    private $Apellidos;
    private $Dni;
    private $Correo;
    private $Cargo;
    private $Direccion;
    private $Telefono;
    private $NombreUsuario;
    private $Password;
    private $Estado;
    private $Foto;
    private $Created;
    private $Updated;
    
    function getIdUsuario() {
        return $this->IdUsuario;
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

    function getCorreo() {
        return $this->Correo;
    }

    function getCargo() {
        return $this->Cargo;
    }

    function getDireccion() {
        return $this->Direccion;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getNombreUsuario() {
        return $this->NombreUsuario;
    }

    function getPassword() {
        return $this->Password;
    }

    function getEstado() {
        return $this->Estado;
    }

    function getFoto() {
        return $this->Foto;
    }

    function getCreated() {
        return $this->Created;
    }

    function getUpdated() {
        return $this->Updated;
    }

    function setIdUsuario($IdUsuario): void {
        $this->IdUsuario = $IdUsuario;
    }

    function setNombres($Nombres): void {
        $this->Nombres = $Nombres;
    }

    function setApellidos($Apellidos): void {
        $this->Apellidos = $Apellidos;
    }

    function setDni($Dni): void {
        $this->Dni = $Dni;
    }

    function setCorreo($Correo): void {
        $this->Correo = $Correo;
    }

    function setCargo($Cargo): void {
        $this->Cargo = $Cargo;
    }

    function setDireccion($Direccion): void {
        $this->Direccion = $Direccion;
    }

    function setTelefono($Telefono): void {
        $this->Telefono = $Telefono;
    }

    function setNombreUsuario($NombreUsuario): void {
        $this->NombreUsuario = $NombreUsuario;
    }

    function setPassword($Password): void {
        $this->Password = $Password;
    }

    function setEstado($Estado): void {
        $this->Estado = $Estado;
    }

    function setFoto($Foto): void {
        $this->Foto = $Foto;
    }

    function setCreated($Created): void {
        $this->Created = $Created;
    }

    function setUpdated($Updated): void {
        $this->Updated = $Updated;
    }

    public function ValidarUsuario() {
        include '../bd/Conexion.php';
        $conexion = new Conexion();
        $conn = $conexion->abrirConexion();
        try {
            $result = $conn->prepare('SELECT idusuario,nombres,apellidos,dni,correo,cargo,direccion,telefono,nombreusuario,password,estado,foto FROM usuarios '
                    . ' where nombreusuario=:nombre'
                    . ' AND password=:password');
            $result->bindParam(":nombre", $this->NombreUsuario);
            $result->bindParam(":password", $this->Password);
            $result->execute();
            $usu = $result->fetch(PDO::FETCH_ASSOC);
            $this->setNombres($usu['nombres']);
//            $this->setApellidos($usu['apellidos']);
//            $this->setTipo_usuario($usu['tipo_usuario']);
            return $result->rowcount();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        $conexion->cerrarConexion();
    }

}
