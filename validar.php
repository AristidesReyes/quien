<?php
$user=$_POST['user'];
$pass=$_POST['pass'];

$conexion=mysqli_connect("localhost","root","","login3");
$consulta="SELECT * FROM usuario WHERE user='$user' and pass='$pass' ";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0){
	header("location:nose.html");
}
else {
	echo "Error en la cauthentificaion vuelve a intentar mas tarde";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
