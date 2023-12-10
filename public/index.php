<?php
require_once(__DIR__ . "/db/db.php");



$conexion = new Conectar('localhost', 'root', '', 'tienda');


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller=$_POST['controller' ?? ""];
    if($controller === 'crearJuego'){
        require_once(__DIR__."/controller/crearjuego_controller.php");
        $crearJuegoControlador = new crearJuegoController($conexion);
        $crearJuegoControlador->crearJuegoController();
    }elseif($controller === 'registro'){
        require_once(__DIR__."/controller/registro_controller.php");
        $registrarUsuario = new RegistroController($conexion);
        $registrarUsuario->registrar();
    }elseif($controller === 'login'){

    }elseif($controller === 'actualizarPerfil'){

    }elseif($controller === 'foro'){

    }else{
        die("error no existe controlador");
    }
}else{
    require_once(__DIR__ . "/view/index.php");
}
?>
