<?php
$host='localhost';
$user = 'root';
$password='Amistad2021!';
$db='residencia';

$conexion = mysqli_connect($host,$user,$password,$db)or die();;


// function insertar($conexion)
// $Nombre = $_POST['Nombre'];
// $Apellidos = $_POST['Apellidos'];

// $consulta = "INSERT INTO residencia(Nombre,Apellidos)
// VALUES ('$Nombre','$Apellidos')";
// mysqli_query($conexion,$consulta);
// mysql_close($conexion);
?>