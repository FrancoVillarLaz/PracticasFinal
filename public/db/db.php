<?php
class Conectar {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    private $conexion;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername ?: "localhost";
        $this->username = $username ?: "root";
        $this->password = $password ?: "";
        $this->dbname = $dbname ?: "tienda";
        $this->conexion = $this->crearConexion();
    }

    public function crearConexion() {

        // Crear conexión
        $conexion = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }

        // Establecer el conjunto de caracteres a UTF-8
        $conexion->query("SET NAMES 'utf8'");

        // Retorna la conexion
        return $conexion;
    }
    public function insertJuego($sql, $juegoInfo) {
        $consulta = $this->conexion->prepare($sql);
        $tiposDatos ='sssssd';

        if (!$consulta) {
            die("Error en la consulta: " . $this->conexion->error);
        }
        
        $consulta->bind_param($tiposDatos, $juegoInfo['nombre'], $juegoInfo['imagen_url'], $juegoInfo['wallpaper_url'], $juegoInfo['sinopsis'], $juegoInfo['categoria'], $juegoInfo['precio']);

        // Ejecutar la consulta
        $consulta->execute();
    
        // Cerrar
        $consulta->close();

        return $consulta;
        
    }
    public function crearUsuario($nombre, $correo, $contraseña){
                // Insertar datos en la base de datos
                $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);
                $consulta = $this->conexion->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");
                $consulta->bind_param("sss", $nombre, $correo, $hashed_password);
    
                if ($consulta->execute()) {
                    echo "Registro exitoso. ¡Bienvenido, $nombre! Haz clic <a href='/public/view/html/login.html'>aquí</a> para iniciar sesión.";
                } else {
                    echo "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
                }
    
                $consulta->close();
    }
    
}
?>
