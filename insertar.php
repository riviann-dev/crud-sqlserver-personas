<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva persona</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Nueva persona</h1>

<form method="POST">
    Nombre:<br>
    <input type="text" name="nombre"><br><br>

    Edad:<br>
    <input type="number" name="edad"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    <button>Guardar</button>
</form>

</body>
</html>

<?php
if($_POST){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    $sql = "INSERT INTO personas (nombre, edad, email)
            VALUES (?, ?, ?)";

    $params = array($nombre, $edad, $email);

    sqlsrv_query($conn, $sql, $params);

    header("Location: index.php");
}
?>
