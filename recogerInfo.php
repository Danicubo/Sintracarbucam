<?php
    require('conexion.php');
    session_start();
    $solicitud = $_POST['solicitud'];
    $importancia = $_POST['select'];
    $fecha = $_POST['fecha'];
    $esRespondida = $_SESSION['solicitud_respondida'] = null;

    if(isset($importancia, $fecha, $solicitud)){
        if($importancia == 'leve'){
            $importancia = "Leve";
        }
        if($importancia == 'intermedio'){
            $importancia = "Intermedio";
        }if($importancia == 'urgente') {
            $importancia = "Urgente";
        }
        $formatDateQuery = "SELECT DATE_FORMAT(fecha, '%Y/%m/%d') AS fecha FROM users";
        $query = "UPDATE users SET solicitud='$solicitud', importancia='$importancia', fecha='$fecha'  WHERE cedula={$_SESSION['cedula']}";
        $resultado = $mysqli->query($query);
        if($resultado>0){
            $esRespondida = false;
            header("Location: mostrarSolicitud.php");
        }else {
            echo "error en la solicitud";
            header("Location: trabajadores.php");
        }
    }

    

