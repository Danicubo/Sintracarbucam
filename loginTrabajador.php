<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: aquamarine;">
    <div class="container" style="background-color: white;">
        <form class="form p-3 border-1" action="loginAuthTrabajador.php" method="POST">
            <center><h2>Iniciar Sesión</h2></center>
            <div class="my-2">
                <label class="form-label" for="cedula">Cedula: </label>
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="cedula" id="cedula" placeholder="Ingresa tu cédula" required/>
            </div>
            <div class="my-2">
                <label class="form-label" for="numero_telefono">Ingresa tu celular: </label>
            </div>
            <div class="my-2">
                <input class="form-control" type="text" name="numero_telefono" id="numero_telefono" placeholder="Ingresa tu numero de celular" required/>
            </div>
            <button  class="btn btn-primary" type="submit" name="login" value="login">Iniciar sesión</button>
        </form>
        <div class="mt-2">
            <a href="registrarse.php">Ir a registro</a>
        </div>
    </div>
   
</body>
</html>