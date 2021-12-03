<?php
session_start();

$nombre = $_POST['usuario'];
$password = $_POST['pass'];


require_once '../Conexion/conexion.php';

$consulta = mysqli_query ($conexion, "SELECT * FROM usuario WHERE usuario = '$nombre' AND contraseña = '$password'");


if (empty($nombre && $password)){
	echo "
	<script>
    alert('Debes de llenar los campos');
   location.href='../index.php';
	</script>;
	
	";
}
else{   
$consulta="SELECT *FROM usuario WHERE usuario ='$nombre' AND  contrasena='$password'";
$query = mysqli_query($conexion,$consulta);

    echo "Bienvenido";

}


?>