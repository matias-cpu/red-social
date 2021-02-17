<?php
include("conexion.php");

$apodo      =$_POST["apodo"];
$nombre     =$_POST["nombre"];
$apellidos  =$_POST["apellidos"];
$edad       =$_POST["edad"];
$descripcion=$_POST["descripcion"];
$email      =$_POST["correo"];
$password   =$_POST["contraseña"];

$passwordHash=password_hash($password, PASSWORD_BCRYPT);
$FotoPerfil= "img/$apodo/perfil.jpg";

$consulta= "SELECT apodo FROM persona WHERE apodo='$apodo'";

$consulta=mysqli_query($conexion,$consulta);
$consulta=mysqli_fetch_array($consulta);

if(!$consulta)
{

	$sql= "INSERT INTO persona VALUES ('$apodo','$nombre','$apellidos','$edad','$descripcion','$FotoPerfil','$email','$passwordHash') ";
	if (mysqli_query($conexion, $sql))
	{

	mkdir("../img/$apodo");
	copy("../img/default.jpg" , "../img/$apodo/perfil.jpg");

	echo "Tu cuenta ha sido creada.";
	echo "<br> <a href='../index.php'>Iniciar Sesion</a></div>";
    }
 else {
 	echo "error:" .$sql. "<br>". mysqli_error($conexion);
      }
}
 else 
 {
 		echo "El apodo ya existe.";
 		echo "<br><a href='../index.php'> Intentalo de nuevo.</a></div>";
 }		


mysqli_close($conexion);

?>