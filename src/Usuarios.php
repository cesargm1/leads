<?php

namespace App;

class Usuarios
{
    public static function AllUser(): array
    {
        $conn = Connection::conn();
        $queery = "SELECT * FROM usuarios ORDER BY usuario";
        $result = $conn->query($queery);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function delete(int $id): bool
    {
        $conn = Connection::conn();
        $query = "DELETE FROM usuarios WHERE id = $id";
        return $conn->query($query);
    }
}
