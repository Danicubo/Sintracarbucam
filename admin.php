<?php
    require('conexion.php');

    $query="SELECT * FROM alape";
	
	$resultado=$mysqli->query($query);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
</head>
<body style="background-color: aquamarine;">
    <div style="background-color: white;" class="container">
        <section class="">
            <div class="">
                <a href="./index.php">Volver al inicio</a>
                <h1><center>SINTRACARBUCAM</center></h1>
                <h3 style="color: red;"><center>CENTRO DE SINDICATO</center></h3>
            </div>
            <div>
                <center>
                    <p style="font-size: 18px;">
                        Administrador, ingrese sus datos para verificar su identidad y
                        poder acceder a la informacion
                    </p>
                </center>
               
            </div>
        </section>

        <section>
                <form class="form w-75 m-auto mb-5" action="loginAdmin.php" method="post">
                    <div class="d-flex flex-column justify-content-center input-group">
                        <div class="">
                            <label class="my-2 form-label" for="email">Email</label>
                        </div>
                        <div>
                            <input class="form-control" type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label class="my-2 form-label" for="contrasena">Contraseña</label>
                        </div>
                        <div>
                            <input class="form-control" type="password" name="contrasena" id="contrasena" required>
                        </div>
                    </div>
                    <button  class="mt-3 btn btn-primary" type="submit" name="login" value="login">Ingresar</button>
                  
                </form>
        </section>
    </div>
</body>
</html>