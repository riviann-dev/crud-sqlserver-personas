<?php
include 'conexion.php';

$id = $_GET['id'];

// Obtener datos actuales
$sql = "SELECT * FROM personas WHERE id = ?";
$params = array($id);
$result = sqlsrv_query($conn, $sql, $params);
$persona = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

// Si se envía el formulario
if ($_POST) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    $sql = "UPDATE personas 
            SET nombre = ?, edad = ?, email = ?
            WHERE id = ?";

    $params = array($nombre, $edad, $email, $id);

    sqlsrv_query($conn, $sql, $params);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar persona</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Editar persona</h1>

<form method="POST">
    Nombre:<br>
    <input type="text" name="nombre" value="<?= $persona['nombre'] ?>"><br><br>

    Edad:<br>
    <input type="number" name="edad" value="<?= $persona['edad'] ?>"><br><br>

    Email:<br>
    <input type="text" name="email" value="<?= $persona['email'] ?>"><br><br>

    <button>Actualizar</button>
</form>

</body>
</html>
