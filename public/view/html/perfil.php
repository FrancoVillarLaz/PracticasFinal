<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil de Usuario</title>
    <!-- Agrega cualquier estilo CSS adicional que desees -->
    <link rel="stylesheet" href="/public/view/css/login.css">
</head>
<body>
<div class="hero"> 
    <h2>Editar Perfil de Usuario</h2>

    <?php include '../../back/php/actualizar_perfil.php';
    
    session_start();

    // Verifica si el usuario ha iniciado sesión
    if (!isset($_SESSION['id_usuario'])) {

        // Si no ha iniciado sesión, redirige al usuario al formulario de inicio de sesión

        header("Location: login.html");
        exit();
    }
    
    // Si el usuario ha iniciado sesión, puedes acceder a la información almacenada en la sesión
    $id_usuario = $_SESSION['id_usuario'];
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $correo_usuario = $_SESSION['correo'];

    echo "ID de Usuario: $id_usuario<br>";
    echo "Nombre de Usuario: $nombre_usuario<br>";
    echo "Correo del Usuario: $correo_usuario<br>";
    ?>

        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>

    <form action="../../back/php/actualizar_perfil.php" method="post">
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="<?php echo "$nombre_usuario" ?>" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" placeholder="<?php  echo "$correo_usuario" ?>" required>

        <label for="contrasena">Nueva Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" placeholder="Dejar en blanco para no cambiar">

  

        <button type="submit">Actualizar Perfil</button>
    </form>

    <form action="../../back/php/eliminar_perfil.php" method="post">
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
        <button type="submit">Eliminar Perfil</button>
    </form>
</div>
</body>
</html>
