<?php

$host = "localhost";
$usuario = "root";
$clave = "Kevin1519Sti@";
$bd = "prueba";

$cone = mysqli_connect($host, $usuario, $clave, $bd);
if (!$cone) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
    
?>

