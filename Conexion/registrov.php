<?php
$nombre = $_GET["inputNombre"] ;
$apellido = $_GET["inputApellido"] ;

$ciudad = $_GET["inputCity"] ;


require_once '../Conexion/conexion.php';
$instruccion_SQL = "INSERT INTO usuario (nombre, apellidos, ciudad,)
VALUES ('$nombre','$apellido','$ciudad')";

$resultado = mysqli_query($conexion,$instruccion_SQL);
if($resultado == FALSE)
{
    echo "error en la consulta";
}  else
{
    echo "Registro guardado<br><br>";
   

}



         mysqli_close($conexion);

?>