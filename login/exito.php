<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['nombre'])) {
    $nombre_usuario = $_SESSION['nombre'];
} else {
    // Si no hay sesión activa, redirigir al formulario de login
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Exitoso</title>
</head>
<body>
    <h1>¡Inicio de sesión exitoso!</h1>
    <p>Hola, <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>. Has sido redirigido a la página de éxito.</p>
</body>
</html>
