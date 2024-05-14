<?php
    require('conexion.php');
    session_start();

	$solicitudCompleta = '';
    $importanciaCompleta = '';
    $fechaCompleta = '';
    $disabled='';
    $row =[];
    $esRespondida = null;
    $query1="SELECT nombre_completo FROM users WHERE cedula=$_SESSION[cedula]";
    $query2="SELECT solicitud, importancia, fecha FROM users WHERE cedula=$_SESSION[cedula]"; 
    
    @$_SESSION['solicitud_respondida'];
    @$esRespondida = $_SESSION['solicitud_respondida'];

 
   
    if(!isset($_SESSION['cedula'])) {
        header("Location: loginTrabajador.php"); 
        exit();
    }
  
    $resultado=$mysqli->query($query1);
    $resultado2=$mysqli->query($query2);

  
    if($row=$resultado->fetch_assoc()){
        echo
        "<div class='text-center mt-3'>
        <h2 > Bienvenido(a) ".$row["nombre_completo"]."</h2>
        <a href='mostrarSolicitud.php'>Ir a solicitud redactada</a>
        </div>";
    }

    if($row= $resultado2->fetch_assoc()){
        
        if((!empty($row['fecha']) && !empty($row['solicitud']) && !empty($row['importancia'])) && !$esRespondida){
            $disabled = 'disabled';
            $solicitudCompleta = $row['solicitud'];
            $importanciaCompleta = $row['importancia'];
            $fechaCompleta = $row['fecha'];
            echo "<div class='text-center mt-3 p-3 w-75 m-auto text-info bg-dark'>
            <p>Ya se ha enviado una solicitud, espere que el administrador de una pronta respuesta para poder enviar otro requerimiento</p> </div>";
        }
        else {
            $disabled = '';
            $importanciaCompleta = 'Seleccione importancia';
            echo "<div class='text-center mt-3 p-3 w-75 m-auto text-info bg-dark'>
            <p>Solicitud vacia, porfavor indique una solicitud</p> </div>";
        }
    }

   


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
</head>
<body style="background-color: aquamarine;">
    <div class="container mt-3" style="background-color: white;">
        <div>
            <p>Este campo, es para que como trabajador exprese sus inconformidades 
                o solicitudes, a continuacion se encontrara u formulario el cual debe ser llenado con dichos comentarios.
            </p>
        </div>
       
        <div class="mb-3"><a href="logout.php" >Cerrar sesión</a></div>
        <div>
            <?php 
                 if($esRespondida){
                    $disabled = '';
                    $solicitudCompleta = $row['solicitud'];
                    $importanciaCompleta = $row['importancia'];
                    echo '<p class="bg-danger text-center w-50 ">El administrador ha respondido tu solicitud</p>';
                } else {
                    echo '<p class="bg-danger text-center w-50 ">El administrador no ha respondido tu solicitud</p>';
                }
            ?>
    
        </div>
        <form class="form" id="form" action="recogerInfo.php" method="POST">
            <div class="mb-3">
                <label for="solicitud">Ingrese Solicitud:</label>
                <textarea class="form-control" col="4" rows="5" id="solicitud" name="solicitud" <?php echo $disabled; ?>  placeholder="Exprese su solicitud" required<?php echo "$disabled" ?> ><?php echo $solicitudCompleta ?></textarea>
            </div>
            <div>     
                <label for="select">Ingrese Importancia:</label>

                <select required class="form-control mb-3" id="importancia" name="select" >
                    <option value="disabled" hidden selected disabled><?php echo $importanciaCompleta; ?></option>
                    <option  value="leve" id="leve" <?php echo $disabled; ?> >Leve</option>
                    <option  value="Intermedio" id="intermedio"<?php echo $disabled; ?> >Intermedio</option>
                    <option  value="Urgente" id="urgente" <?php echo $disabled; ?> >Urgente</option>
                </select>
            </div>
            <div>
                <label for="fecha">Ingrese Fecha:</label>
                <input class="form-control mb-3" type="date" id="fecha" name="fecha" value="AAAA/MM/DD" required <?php echo $disabled; ?>/>
            </div>
            <button  class="btn btn-primary" type="submit" name="button" value="continuar" <?php echo $disabled; ?> >Continuar</button>
        </form>
    </div>
    
</body>
</html>