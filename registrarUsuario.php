<?php
    include('conexion.php');

    $cedula = $_POST['cedula'];
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $numero_telefono = $_POST['numero_telefono'];

    $query = "INSERT INTO users (cedula, nombre_completo, correo, numero_telefono) 
        VALUES ('$cedula', '$nombre_completo', '$correo', '$numero_telefono')";
    $resultado = $mysqli->query($query)
    
?>

<html>
<?php 
    session_start();
    if($resultado>0){?>
    
        <head>
            <title>Usuario Creado</title>
        </head>
        <h1>Usuario Guardado Satisfactoriamente</h1>
        <a href="trabajadores.php">Ir a sección trabajadores</a>
        <?php }else{ ?>
        <h1>Error al Guardar Usuario</h1>	
        <a href="registrarse.php">Volver a Registrar usuario</a>	
    <?php	}?>	
</html>
