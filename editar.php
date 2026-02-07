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

<h2>Editar persona</h2>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?= $persona['nombre'] ?>"><br>
    Edad: <input type="number" name="edad" value="<?= $persona['edad'] ?>"><br>
    Email: <input type="text" name="email" value="<?= $persona['email'] ?>"><br>
    <button>Actualizar</button>
</form>
