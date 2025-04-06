<?php

namespace App;

class RegisterUser
{
    public static function createUser(string $usuario, string $direccion, string $email, string $password): bool
    {
        $conn = Connection::conn();
        $query = "INSERT INTO usuarios (usuario, direccion, email, `password` ) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $usuario, $direccion, $email, $password);
        return $stmt->execute();
    }
}
