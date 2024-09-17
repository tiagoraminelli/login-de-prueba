<?php
// Mostrar un mensaje inicial
echo "empezamos las cookies" . "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de prueba de cookies</title>
</head>
<body>
    <form action="registro.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <button type="submit">Aceptar</button>
        <input type="checkbox" name="mantener" id=""> Recordarme 
    </form>
</body>
</html>
