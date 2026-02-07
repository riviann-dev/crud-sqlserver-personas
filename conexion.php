<?php 
$serverName = "localhost\\SQLEXPRESS";
$connectionOptions = array (
    "Database" => "personas_db",
    "Uid" => "",
    "PWD" => "",
    "Characters" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>