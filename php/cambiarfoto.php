<?php
    include("validarsesion.php");

    $ubicacion= "../img/" .$apodo ."/perfil.jpg";

    $archivo= $_FILES['archivo'] ['tmp_name'];

    if(move_uploaded_file($archivo, $ubicacion)) {

    echo "El Archivo ha sido subido";
    
     header('location: ../fotos.php'); 
     }
     else{
     	echo "Ha ocurrido un error,trate de nuevo";
     	echo "<a href='../fotos.php' >Volver.</a></div> ";
     }

?>