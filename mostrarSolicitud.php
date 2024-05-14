<?php
    require('conexion.php');

    session_start();
    if(!isset($_SESSION['cedula'])) {
        header("Location: loginTrabajador.php"); 
        exit();
    }

    $query="SELECT nombre_completo, solicitud, importancia, fecha FROM users WHERE cedula=$_SESSION[cedula]";
	$resultado=$mysqli->query($query); 

   

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud Redactada</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
</head>
<body>
    <div class="container p-3" style="background-color:white">
        <a href="trabajadores.php">Volver a Solicitudes</a>
        <div class="mb-3"><a href="logout.php" >Cerrar sesión</a></div>
        <?php
        while($row=$resultado->fetch_assoc()){
            echo "<h2 id='mostrarDatosSolicitud' class='text-center my-3' >
            Rango de la solicitud: ".$row["importancia"].
            "<br>" . "Nombre: " . $row["nombre_completo"].
            "<br>". "Enviada el día: ".
            $row["fecha"] ."</h2>";

            echo "<center><div>
                <textarea class='form-control w-50' disabled>".$row["solicitud"]."</textarea>
            </div></center>";
        }
        ?>
    </div>
    
</body>
</html>