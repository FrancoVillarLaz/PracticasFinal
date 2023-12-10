<?php
require_once(__DIR__ . "/../db/db.php");

    class Registro {
        private $conexion;

        public function __construct() {
            $this->conexion = new Conectar('localhost', 'root', '', 'tienda');
        }
        

        public function registrarUsuario($nombre, $correo, $contraseña) {
            if ($nombre && $correo && $contraseña) {
                // Verificar si el correo está registrado
                $consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE correo=?");
                $consulta->bind_param("s", $correo);
                $consulta->execute();
    
                $resultadoCheck = $consulta->get_result();
    
                if ($resultadoCheck->num_rows > 0) {
                    echo "El correo ya está registrado. Por favor, elige otro correo.";
                } else {
                    // Llamar al método de la conexión para crear el usuario
                    $this->conexion->crearUsuario($nombre, $correo, $contraseña);
                }
    
                $consulta->close();
            } else {
                echo "Por favor, completa todos los campos del formulario.";
            }
        }
        
    }

?>