<?php
    require('conexion.php');

    $cedula = $_POST['cedula'];
    $telefono = $_POST['numero_telefono'];

    $query = "SELECT cedula, numero_telefono FROM users WHERE (cedula='$cedula' AND numero_telefono='$telefono')";
    $resultado = $mysqli->query($query);

    if($resultado->num_rows > 0){
        session_start();
        $row = $resultado->fetch_assoc();
        $_SESSION['cedula'] = $row['cedula'];
        $_SESSION['nombre_completo'] = $row['nombre_completo'];
        header("Location: trabajadores.php");
    }else {
        echo "<p>Cédula o numero no son correctos</p>";
        echo "<a href='registrarse.php'>Ir a registro</a>";
    }
?>