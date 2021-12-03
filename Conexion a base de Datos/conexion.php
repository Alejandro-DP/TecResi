<?php

$conexion = mysqli_connect ('localhost','root',' ','residencia')
or die(mysql_error(mysqli));

function insertar($conexion)
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];

$consulta = "INSERT INTO residencia(Nombre,Apellidos)
VALUES ('$Nombre','$Apellidos')";
mysqli_query($conexion,$consulta);
mysql_close($conexion);
?>