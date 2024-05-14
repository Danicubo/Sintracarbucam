<?php
require('conexion.php');

$row=[];
$query1 = "SELECT id, fecha, importancia, nombre_completo FROM users WHERE importancia='Urgente'";
$query2 = "SELECT importancia, COUNT(*) as cantidad FROM users WHERE importancia IN ('Urgente') GROUP BY importancia";

$resultado1 = $mysqli->query($query1);
$resultado2 = $mysqli->query($query2);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimientos Leves</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
</head>
<body>
    <div class="container bg-light">
        

        <div class="m-autoa p-2">                                 
            <center>
            <h2 class="text-danger">SE HA INGRESADO A LAS SOLICITUDES URGENTES</h2>
            <a href="solicitudes.php">Volver a Solicitudes</a>
            <h6 class="mt-2">EN ESTE MOMENTO SE ENCUENTRAN DISPONIBLES  <?php while($row = $resultado2->fetch_assoc()){
                echo   "<span class='bg-warning'>".$row["cantidad"]. "</span>";
            } ?> SOLICITUDES.</h6>
            </center>
        </div>


        <form action="atenderSolicitud.php" method="POST">
            <div class=" p-2 w-75 m-auto text-center">
                <?php   
                    while($row = $resultado1->fetch_assoc()){
                        echo 
                        "<div>".
                            "<button  id='sendId' name='sendId' value=".$row['id']." class='w-100 my-3 p-2 border border-success rounded-pill'>"
                                ."Id Usuario: "." (".$row['id'].") ".$row['importancia']. " Fecha: " ."(".$row['fecha'].") ". $row['nombre_completo'].  
                            "</button>".
                        "</div>";
                    }   
                
                ?>
            </div>
        </form>
        <div class="d-flex flex-row justify-content-around p-2">
            <a href="solicitudesIntermedias.php"><-Ir Solicitudes Intermedias</a>
        </div>
    </div>
    
</body>
