<?php
    //requerimos los archivos de la vista y modelo
    require_once(__DIR__ . "/../view/html/login.html");
    require_once(__DIR__ . "/../model/registro_model.php");

    class RegistroController{
        private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }    
    public function registrar(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $registro = new registro();
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

            $registro->registrarUsuario($nombre, $correo, $contraseña);

        }
    }
    }
?>