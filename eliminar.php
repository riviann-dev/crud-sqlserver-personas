<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM personas WHERE id = ?";
$params = array($id);

sqlsrv_query($conn, $sql, $params);

header("Location: index.php");
?>
