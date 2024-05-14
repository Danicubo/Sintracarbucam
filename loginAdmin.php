<?php
    require('conexion.php');
    session_start();

    if(isset($_POST['login'])){
        $email_valido = "admin@gmail.com";
        $contrasena_valida = "12345";
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        if($email == $email_valido && $contrasena == $contrasena_valida){
            $_SESSION['loggedin'] = true;
            $_SESSION['usuario'] = $usuario;
            header("location: solicitudes.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }          
?>

