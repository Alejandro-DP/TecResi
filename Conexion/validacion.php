<?php

$nombre = $_POST['usuario'];
$password = $_POST['pass'];


require_once '../Conexion/conexion.php';



if (empty($nombre && $password)){
	echo "
	<script>
    alert('Debes de llenar los campos');
   location.href='../login.php';
	</script>;
	
	";
}
else{
	$query ="SELECT * FROM usuario WHERE nombre = '$nombre' AND pass = '$password'";
	$consulta =  mysqli_query($conexion,$query);

	$row = mysqli_fetch_array($consulta);

	if($row['id_role'] == 3){
		session_start();
		header('location: ./statusres.php');
	}
	else
	if ($row['id_role'] == 4) {
		session_start();
		
		header('location: ./res.php');
	}
}



?>