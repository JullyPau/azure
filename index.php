<?php
$host = "mysql-prd-server.mysql.database.azure.com";
$username = "tuusuario";
$password = "tucontraseña";
$dbname = "testdb";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa a MySQL desde Azure Web App!";
mysqli_close($conn);
?>