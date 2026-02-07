<?php
include 'conexion.php';

$sql = "SELECT * FROM personas";
$result = sqlsrv_query($conn, $sql);
?>

<h2>Lista de personas</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Email</th>
</tr>

<?php while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['edad'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        
    </td>
</tr>
<?php } ?>
</table>
