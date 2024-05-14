<?php
    require('conexion.php');
    $query = "SELECT importancia, COUNT(*) as cantidad FROM users WHERE importancia IN ('Urgente', 'Leve', 'Intermedio') GROUP BY importancia";

    $resultado=$mysqli->query($query);
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:aquamarine">

    <div class="container" style="background-color: white">
        <div>
            <a href="index.php">Volver al inicio</a>
        </div>
        <center><h1>Señor(a), Nombre de usuario</h1></center>
        <center>
            <?php
            while($row = $resultado->fetch_assoc()) {
            echo "<p>Cantidad de solicitudes de importancia " . $row["importancia"] . ": " . $row["cantidad"]. "</p>" ;
            }       
            ?>
        </center>
        

        <section class="my-5">
            <center>
            <div class="d-flex flex-column align-items-center">
                <a class="bg-success w-75 p-3" href="solicitudesLeves.php">Atender solicitudes leves </a>
                <a class="bg-warning w-75 my-4 p-3" href="solicitudesIntermedias.php">Atender solicitudes intermedias</a>
                <a class="bg-danger w-75 mb-5 p-3"href="solicitudesUrgentes.php">Atender solicitudes urgentes</a>
            </div>
            </center>
          
        </section>
    </div>
</body>
</html>