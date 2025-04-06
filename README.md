# Proyecto leads

## Repositorio de github

[acceder al proyecto leads](https://github.com/cesargm1/leads/)

## Instalacion

```bash
composer install
```

## Base de datos

Las bases de datos estan en la carpeta database:

- db.sql : estructura de la base de datos
- triggers.sql : Definicion de los trigger
- seeder.sql : Usuario de pruebas

## Configuracion

Edita el fichero .env

```env
DB_USERNAME=root
DB_PASSWORD=
ADMIN_USERNAME=admin
ADMIN_PASSWORD=admin
```

## Inciar sevidor

```bash
composer serve
```

## Acceder a la web

http://localhost:8000

### Aceso al administrador

http://localhost:8000/usuarios.php

> [!IMPORTANT]
> Usa el usuario y la contraseña del .env
