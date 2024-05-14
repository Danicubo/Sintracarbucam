<?php
    require('conexion.php');
    $sendId = $_POST['sendId'];
    $textArea = $_POST['textArea'];
    $campoRespuesta = $_POST['campoRespuesta'];
    $respuestaTotal = 'Solicitud del empleado: ' . $textArea . ' \nRespuesta del administrador: ' . $campoRespuesta;
    $query = "UPDATE users SET solicitud ='$respuestaTotal' WHERE id='$sendId'";
    if($campoRespuesta == ''){
        echo'<script type="text/javascript">
        alert("Solicitud vacía, por favor vuelva a redactar la solicitud");
        window.location.href="solicitudes.php";
        </script>';
    }

    $resultado = $mysqli->query($query);
    
    if($resultado === TRUE){
        session_start();
    
        $_SESSION['solicitud_respondida'] = true;
        echo '<script type="text/javascript">
        alert("Solicitud enviada");
        window.location.href="solicitudes.php";
        </script>';
    }else{
        echo '<script type="text/javascript">
        alert("Error al enviar solicitud, intente de nuevo");
        window.location.href="solicitudes.php";
        </script>';
    }


?>