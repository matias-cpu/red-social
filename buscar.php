<?php
    include("php/conexion.php");
    include("php/validarsesion.php");
?>


<!DOCTYPE html>
<html>

     <head>
          <title>Buscar</title>
          <meta charset="utf-8"/>
          <link href="css/estilo.css" rel="stylesheet">
</head>


  <body>
  	<header>
  	<div id="logo">
  		<img src="img/logo.jpg" alt="logo"></a>
  	</div>	
     <nav class="menu">
     	<ul>
     	
        <li> <a href="miperfil.php">Mi Perfil</a> </li>
        <li> <a href="amigos.php">Mis Amigos</a> </li>
        <li> <a href="fotos.php">Mis Fotos</a> </li>
        <li> <a href="Buscar.php">Buscar</a> </li>
        <li> <a href="php/cerrarsesion.php">Cerrar Sesion</a> </li>
     </ul>
     </nav>
  	</header>
     <section id="recuadros">
            <h2>Encuentra Nuevos amigos</h2>
     <?php 
      $consulta= "SELECT * FROM persona WHERE apodo!='$apodo' AND apodo NOT IN(SELECT apodo2 FROM amistad WHERE apodo1='$apodo' ) ";
      $datos=mysqli_query($conexion,$consulta);
      while ($fila=mysqli_fetch_array($datos)) {
        
     ?>
     <section class="recuadro">
              <img src="<?php echo $fila['FotoPerfil'] ?>" height="150">
              <h2><?php echo $fila['Nombre'] . "" .$fila['Apellidos'] ?></h2>
              
              <a href="<?php echo "Perfil.php?apodo=".$fila['apodo'] ?> " class="boton">Ver Perfil</a><br>
              <a href="<?php echo "php/agregaramigo.php?apodo=".$fila['apodo'] ?>" class="boton">Agregar Amigo </a></br></br>     
    </section>
<?php    
                                           }
?> 
    
</section>

</body>
</html>
  