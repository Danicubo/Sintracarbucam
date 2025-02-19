<?php
// Inicia la sesión si no está iniciada
session_start();

// Elimina todas las variables de sesión
$_SESSION = array();

// Borra la cookie de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finaliza la sesión
session_destroy();

// Redirige al usuario al inicio de sesión o a la página principal
header("Location: index.php");
exit();
?>