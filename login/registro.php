<?php
// Datos de autenticación
$nombre = "nail";
$contraseña = "nose";

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $postNombre = $_POST["nombre"];
    $postPass = $_POST["pass"];
    $mantener = isset($_POST["mantener"]) ? true : false;

    // Verificar las credenciales
    if ($postNombre === $nombre && $postPass === $contraseña) {
        // Iniciar la sesión
        session_start();
        $_SESSION['nombre'] = $postNombre;

        // Establecer una cookie si el checkbox "Recordarme" está marcado
        if ($mantener) {
            $nombre_cookie = "loginDePrueba";
            $valor_cookie = "aceptada";
            $tiempo_expiracion = time() + 3600; // 1 hora
            setcookie($nombre_cookie, $valor_cookie, $tiempo_expiracion, "/");
        }

        // Redirigir a la página de éxito
        header("Location: exito.php");
        exit(); // Asegúrate de salir después de redirigir
    } else {
        echo "Credenciales incorrectas";
    }
}
?>
