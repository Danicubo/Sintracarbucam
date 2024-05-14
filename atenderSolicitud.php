<?php
    require('conexion.php');
    $sendId = $_POST['sendId'];
    $row = [];
   
    $query = "SELECT id, nombre_completo, fecha, solicitud FROM users WHERE id='$sendId'";
    $resultado = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atender Solicitud</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../proyectoIsa/styles.css">
</head>
<body>

    <div class="container bg-light m-auto'">
        <div class="">
            <a  href="solicitudesLeves.php">Volver</a>
        </div>
        
        <form id="miFormulario" action="responderSolicitud.php" method="POST">
            <div class="p-2 w-75 m-auto text-center">
                
                <?php
                    
                    if($resultado->num_rows > 0){
                        if($row = $resultado-> fetch_assoc()){
                            echo 
                                "<div><input hidden class='my-3' type='number' name='sendId' id='sendId' value=".$row['id']."></div>".
                                "<div><label class='my-3'> Solicitud de: ".$row['nombre_completo']."</label></div>".
                                "<div><label class='my-3'> Realizado en la fecha: ".$row['fecha']."</label></div>".
                                "<div><textarea class='form-control my-3' id='textArea' name='textArea'>".$row['solicitud']."</textarea></div>".
                                "<p>Responda a la solicitud:</p>".
                                "<div><textarea id='campoRespuesta' name='campoRespuesta' class='form-control my-3'></textarea></div>"
                            ;
                        }  
                    }
                ?>
               
            </div>
            <div class="text-center p-3">
                <button>Enviar y Responder Siguiente Solicitud</button>
            </div>
        </form>
    </div>
    
</body>
<script>

    /* function seleccionarAccion(accion) {
        document.getElementById('accion').value = accion;
    }

    function eviarDatos(){
        var accion = document.getElementById('accion').value;
        if (accion === 'accion1') {
            document.getElementById('miFormulario').action ='admin.php';
        } else if (accion === 'accion2') {
            document.getElementById('miFormulario').action ='responderSolicitud.php';
        } else {
            //document.getElementById('miFormulario').action ='atenderSolicitud.php';
        }

        return true;
    }
 */

</script>
</html>