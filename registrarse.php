<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
</head>
<body style="background-color: aquamarine;">
    <div class="container" style="background-color: white;">
        <section>
            
            <div>
                <center>
                    <p>BIENVENIDOS A</p>
                    <h3>SINTRACARBUCAM</h3>
                    <span>AFILIATE</span>
                </center>
                
            </div>
        </section>


        <section>
                <form class="form w-75 m-auto mb-5" action="registrarUsuario.php" method="post">
                    <div class="d-flex flex-column justify-content-center input-group">
                        <div class="">
                            <label class="my-2 form-label" for="cedula">Cedula</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" name="cedula" id="cedula" required>
                        </div>
                        <div>
                            <label class="my-2 form-label" for="nombre_completo">Nombres y Apellidos</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" name="nombre_completo" id="nombre_completo" required>
                        </div>
                        <div>
                            <label class="my-2 form-label" for="correo">Email</label>
                        </div>
                        <div>
                            <input class="form-control" type="email" name="correo" id="correo" required>
                        </div>
                        <div>
                            <label class="my-2 form-label" for="numero_telefono">Numero Celular</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" name="numero_telefono" id="numero_telefono" required>
                        </div>
                    </div>
                    <button  class="mt-3 btn btn-primary" type="submit" name="login" value="register">Registrarse</button>
                </form>
                <p>¿Ya estás afiliado?</p>
                <a href="loginTrabajador.php">Inicia sección aquí</a>
        </section>
    </div>
    
</body>
</html>