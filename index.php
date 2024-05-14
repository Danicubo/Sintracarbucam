<?php

    require('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyectoIsa/styles.css">

</head>
<body style="background-color: aquamarine;">
    <div style="background-color: white;" class="container">
        <section class="">
            <div class="">
                <h1><center>BIENVENIDO A SINTRACARBUCAM</center></h1>
            </div>
            <div>
                <center>
                    <p style="font-size: 18px;">
                        Este es un espacio para expresar, dudas, 
                        reclamos o quejas acerca de las problemáticas individuales de cada persona 
                        dentro de la compañía
                    </p>
                </center>
               
            </div>
        </section>

        <section>
                <div class="d-flex flex-row justify-content-evenly">
                    <div class="card my-3">
                        <center><img src="https://cdn-icons-png.flaticon.com/512/912/912265.png" alt="trabajador" class="img-fluid my-3 w-75">
                        <br>
                        <a class="linkInicio" href="registrarse.php">TRABAJADOR</a>
                        </center>
                        
                    </div>
                    <div class="card my-3">
                        <center><img src="https://cdn-icons-png.flaticon.com/512/10617/10617691.png" alt="empleador" class="img-fluid mb-3 w-75">
                        <br>
                        <a class="linkInicio" href="./admin.php">ADMINISTRADOR</a>
                    </center>
                    </div>
                </div>
        </section>
    </div>
</body>
</html>