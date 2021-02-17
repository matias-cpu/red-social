<?php

if ($apodo == $apodoA) 
   {
	 header('location:miperfil.php');

   }

  $consulta= "SELECT  * FROM persona WHERE apodo='$apodoA' ";
  
  $consulta=mysqli_query($conexion,$consulta);
  $consulta=mysqli_fetch_array($consulta);

  $nombreA      =$consulta['Nombre'];
  $apellidosA   =$consulta['Apellidos']; 
  $edadA        =$consulta['Edad']; 
  $descripcionA =$consulta['Descripcion'];
  $FotoPerfilA  =$consulta['FotoPerfil'];
  
 ?>       