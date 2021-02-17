<?php
    
    include ("conexion.php");
    include ("validarsesion.php");

    $apodoA =$_GET['apodo'];

    $consulta= "INSERT INTO amistad (apodo1, apodo2) VALUES ('$apodo','$apodoA') ";

    if (mysqli_query($conexion, $consulta)) {

    $consulta= "INSERT INTO amistad (apodo1, apodo2) VALUES ('$apodoA','$apodo') ";	
          
     if (mysqli_query($conexion,$consulta)) {

         echo "ahora tienes un nuevo amigo";
         header('location: ../buscar.php');
     }
     
     else
      {
      	echo "error";
      	echo"<a href='../buscar.php'>Volver.</a></div>";
      }
      
}

     else 
     {
     	echo "error";
        echo"<a href='../buscar.php'>Volver.</a></div>";
     }
?>

