<?php
    class Juego{
        private $conexion;

        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        public function guardarImg($img, $wallpaper, $nombre){
            // Verifica si existe el diractorio
            if(!is_dir(__DIR__ . '/../img/'.$nombre)){
                echo "la ruta no existe";


                // crea el directorio y guardamos la ruta

               if (mkdir(__DIR__ . '/../img/'.$nombre, 0755, true)){
                echo 'la carpeta se creo correctamente';
                $rutaPerm = 'img/' . $nombre ;

               }else{

                echo 'la carpeta no pudo crearse';

               };

            }else{
                echo "la ruta existe";
                $rutaPerm = 'img/' . $nombre ;  
            };

            $rutaTemp = [$img,$wallpaper];
            $nombreUnico = uniqid(). '_' . $nombre;
            
            if (move_uploaded_file($rutaTemp[0], $rutaPerm . '/'. $nombre . '_img.jpg') && move_uploaded_file($rutaTemp[1], $rutaPerm . '/'. $nombre . '_wallpaper.jpg')) {
                echo 'archivos creados';
            } else{
                echo 'error en los archivos';
            }
            $imagenRutas=[$rutaPerm . '/'. $nombre . '_img.jpg', $rutaPerm . '/'. $nombre . '_wallpaper.jpg'];
            echo $imagenRutas[0] . '<br>';
            echo $imagenRutas[1];
            
            return $imagenRutas;
        }

        public function crearJuego($juegoInfo, $imagenRutas){
            $juegoInfo['imagen_url'] = $imagenRutas[0];
            $juegoInfo['wallpaper_url'] = $imagenRutas[1];
            $crearJuegoQuery="INSERT INTO juego (nombre, imagen_url, wallpaper_url, sinopsis, categoria, precio) VALUES (?, ?, ?, ?, ?, ?)";


            $this->conexion->insertJuego($crearJuegoQuery, $juegoInfo);
        }
        
    }

?>