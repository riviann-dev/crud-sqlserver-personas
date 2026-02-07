<?php
include 'conexion.php';

$sql = "SELECT * FROM personas";
$result = sqlsrv_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Personas</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Gestión de personas</h1>

<a href="insertar.php">
    <button>Nueva persona</button>
</a>

<br><br>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Email</th>
    <th>Acciones</th>
</tr>

<?php
$hayDatos = false;

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    $hayDatos = true;
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['edad'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="editar.php?id=<?= $row['id'] ?>">
            <button>Editar</button>
        </a>
        <a href="eliminar.php?id=<?= $row['id'] ?>">
            <button>Eliminar</button>
        </a>
    </td>
</tr>
<?php } ?>

<?php if(!$hayDatos) { ?>
<tr>
    <td colspan="5">No hay personas registradas aún</td>
</tr>
<?php } ?>

</table>

</body>
</html>
