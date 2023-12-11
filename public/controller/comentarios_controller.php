<?php
    require_once(__DIR__ . "/../db/db.php");
    require_once(__DIR__ . "/../view/html/foro.html");
    



$conexion = new Conectar('localhost', 'root', '', 'tienda');
    // header('Content-Type: application/json');
    class Foro{
        private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }    
    public function crearComentarioController(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
        $nombre = $_POST['usuario'];
        $comentario = $_POST['mensaje'];
        $this->conexion->crearComentario($nombre, $comentario);
    }
    }
    public function mostrarComentarioController(){
        if ($_SERVER['REQUEST_METHOD']==='GET') {
            $this->conexion->mostrarComentario();
            }
        }
    }
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $nombre = $_POST['usuario'];
        $comentario = $_POST['mensaje'];
        $conexion->crearComentario($nombre, $comentario);
    }
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
    
        $mostrarComentarios= new foro($conexion);
    
        $mostrarComentarios->mostrarComentarioController();
    }
?>
