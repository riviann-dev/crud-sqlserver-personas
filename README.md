# CRUD de Personas con PHP y SQL Server

Proyecto CRUD completo desarrollado en PHP conectado a SQL Server Express.
Permite gestionar personas mediante operaciones de creación, consulta, edición y eliminación de registros.

## Tecnologías utilizadas

* PHP 8.2
* SQL Server Express
* SQLSRV driver for PHP
* XAMPP (Apache)
* HTML / CSS básico
* SQL Server Management Studio (SSMS)

## Funcionalidades

* Crear nuevas personas
* Listar registros en base de datos
* Editar información existente
* Eliminar registros
* Conexión directa PHP ↔ SQL Server

## Estructura del proyecto

```
crud-php-sqlserver/
│
├── conexion.php
├── index.php
├── insertar.php
├── editar.php
├── eliminar.php
├── database/
│   └── script.sql
└── README.md
```

## Base de datos

Nombre de la base de datos:

```
personas_db
```

Script de creación:

```sql
CREATE DATABASE personas_db;

USE personas_db;

CREATE TABLE personas (
    id INT PRIMARY KEY IDENTITY(1,1),
    nombre VARCHAR(50),
    edad INT,
    email VARCHAR(100)
);
```

## Configuración del entorno

### 1. Instalar dependencias

* SQL Server Express
* XAMPP
* SQLSRV drivers para PHP

### 2. Activar extensiones en php.ini

```ini
extension=php_sqlsrv_82_ts_x64.dll
extension=php_pdo_sqlsrv_82_ts_x64.dll
```

### 3. Configurar conexión

Archivo:

```
conexion.php
```

```php
$serverName = "localhost\\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "personas_db",
    "TrustServerCertificate" => true
);
```

## Ejecución del proyecto

1. Clonar repositorio

```
git clone https://github.com/usuario/crud-php-sqlserver.git
```

2. Copiar carpeta dentro de:

```
C:\xampp\htdocs
```

3. Iniciar Apache en XAMPP

4. Abrir en navegador:

```
http://localhost/crud-php-sqlserver
```

## Capturas (opcional)

* listado de personas
* formulario de inserción
* edición de registros

## Objetivo del proyecto

Este proyecto forma parte de un portfolio profesional orientado a desarrollo web backend y gestión de bases de datos, demostrando:

* conexión PHP con SQL Server
* implementación de operaciones CRUD
* uso de drivers SQLSRV
* estructura básica de aplicación web

## Posibles mejoras futuras

* interfaz con Bootstrap
* validaciones de formulario
* sistema de login
* roles de usuario
* API REST
* despliegue en servidor remoto

## Autor

Riviann de Andrade
Desarrollador en formación – Desarrollo de Aplicaciones Web
