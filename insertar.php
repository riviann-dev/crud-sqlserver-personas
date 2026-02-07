<?php
include 'conexion.php';

if($_POST){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    $sql = "INSERT INTO personas (nombre, edad, email)
            VALUES ('$nombre', $edad, '$email')";

    sqlsrv_query($conn, $sql);
    header("Location: index.php");
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Edad: <input type="number" name="edad"><br>
    Email: <input type="text" name="email"><br>
    <button>Guardar</button>
</form>
