<?php

use App\Middelware;
use App\Usuarios;


include_once '../vendor/autoload.php';
Middelware::admin();
$action = $_POST['action'] ?? null;

if ($action === 'eliminar') {
    $id = (int)$_POST['id'];
    Usuarios::delete($id);
}

$usuarios = Usuarios::AllUser();



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de usuarios</title>
</head>

<body>
    <table>
        <tr>
            <th>usuario</th>
            <th>direccion</th>
            <th>email</th>
        </tr>
        <?php
        foreach ($usuarios as $user) {
            $usuario = $user['usuario'];
            $direccion = $user['direccion'];
            $email = $user['email'];
        ?>
            <tr>
                <td><?php echo $usuario ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $email ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <input type="submit" name="action" value="eliminar">
                    </form>

                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>