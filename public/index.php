<?php

use App\RegisterUser;

include_once '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    RegisterUser::createUser($usuario, $direccion, $email, $password);

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /registro-completado.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
</head>

<body>
    <h1>Formulario de registro de usuarios</h1>
    <form method="post">
        <label>
            <input type="text" name="usuario" autofocus required placeholder="Introduce tu usuario">
        </label>

        <label>
            <input type="text" name="direccion" required placeholder="Introduce tu direccion">
        </label>

        <label>
            <input type="email" name="email" required placeholder="Introduce tu email">
        </label>

        <label>
            <input type="password" name="password" required placeholder="Introduce tu contraseña">
        </label>
        <button type="submit">registrarse</button>
    </form>
</body>

</html>