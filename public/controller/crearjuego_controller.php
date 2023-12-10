<?php
    //requerimos los archivos de la vista y modelo
    require_once(__DIR__ . "/../view/html/crearjuego.html");
    require_once(__DIR__ . "/../model/crearjuego_model.php");

    class crearJuegoController{
        private $conexion;
    
        public function __construct($conexion){
            $this->conexion = $conexion;
        }
        function crearJuegoController(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            //le paso la conexion de la bd
            $crearJuego= new Juego($this->conexion);

            // Guarda la informacion del formulario
            $juegoImg= $_FILES["imagen"]['tmp_name'];
            $juegoWall= $_FILES["wallpaper"]['tmp_name'];
            $juegoInfo = $_POST;

            // Guardamos las imagenes
            $imagenRutas = $crearJuego->guardarImg($juegoImg, $juegoWall, $juegoInfo['nombre']);
            if(!empty($imagenRutas) ){
                $crearJuego->crearJuego($juegoInfo, $imagenRutas);
            }
            
            

        } else {
            
        }
        
    }
}  
?>