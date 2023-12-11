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
        if ($nombre && $correo && $contraseña) {
            // Verificar si el correo está registrado
            $consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE correo=?");
            $consulta->bind_param("s", $correo);
            $consulta->execute();

            $resultadoCheck = $consulta->get_result();

            if ($resultadoCheck->num_rows > 0) {
                echo "El correo ya está registrado. Por favor, elige otro correo.";
            } else {
                // Insertar datos en la base de datos
                $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);
                $consulta = $this->conexion->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");
                $consulta->bind_param("sss", $nombre, $correo, $hashed_password);
    
                if ($consulta->execute()) {
                    echo "Registro exitoso. ¡Bienvenido, $nombre! Haz clic <a href='/public/view/html/login.html'>aquí</a> para iniciar sesión.";
                } else {
                    echo "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
                }
    
            }

            $consulta->close();
        } else {
            echo "Por favor, completa todos los campos del formulario.";
        }
                
    }
    public function crearComentario($nombre, $comentario) {
        $consulta = $this->conexion->prepare('INSERT INTO comentarios (nombre, comentario) VALUES (?, ?)');
        $consulta->bind_param('ss', $nombre, $comentario);
        $consulta->execute();
        
        if ($consulta->execute()) {
            echo json_encode('comentario guardado correctamente');
        } else {
            echo json_encode('error al guardar el comentario');
        }
    }
    
    public function mostrarComentario() {
        $consulta = $this->conexion->prepare('SELECT * FROM comentarios');
        $consulta->execute();
        $resultadoCheck = $consulta->get_result();
    
        if ($resultadoCheck->num_rows >= 1) {
            $filas = array();
            while ($fila = $resultadoCheck->fetch_assoc()) {
                $filas[] = $fila;
            }
            echo json_encode($filas);
        } else {
            echo json_encode('ningun comentario encontrado');
        }
    }
}
?>
