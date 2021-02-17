<?php

include("conexion.php");

session_start();
$_SESSION['login'] =false;

$apodo=$_POST["apodo"];
$password=$_POST["contraseña"];

$consulta="SELECT * FROM `persona` WHERE apodo='$apodo' ";

$consulta = mysqli_query($conexion, $consulta);
$consulta = mysqli_fetch_array($consulta);

if($consulta)
{
	if (password_verify($password, $consulta['password'])) 
	{


     $_SESSION[login]        =true;
     $_SESSION[apodo]        =$consulta['apodo'];
     $_SESSION[nombre]       =$consulta['Nombre'];
     $_SESSION[apellidos]    =$consulta['Apellidos'];
     $_SESSION[edad]         =$consulta['Edad'];
     $_SESSION[descripcion]  =$consulta['Descripcion']; 
     $_SESSION[FotoPerfil]   =$consulta['FotoPerfil'];

     header('location: ../miperfil.php'); //redireccionamos a la pagina de mi perfil//
     }    
     else
     {
     	echo "contraseña Incorrecta";
     	echo "<br><a href='../index.php'>Intentalo de Nuevo.</a></div>";
     }
}
    else 
    {
        echo "El usuario no existe";
     	echo "<br><a href='../index.php'>Intentalo de Nuevo.</a></div>";
    }


mysqli_close($conexion);



?>