<?php
    include("php/conexion.php");
    include("php/validarsesion.php");
?>
<!DOCTYPE html>
<html>

     <head>
          <title>Mi Perfil</title>
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
    <section id="Perfil">
    	<img src="<?php echo "$_SESSION[FotoPerfil]" ?>" >
    	<h1> <?php echo "$_SESSION[nombre] $_SESSION[apellidos]" ?></h1>
    	<P> <?php echo "$_SESSION[descripcion]" ?></P>
    </section>
    <section id="recuadros">
    	     <h2>Mis Amigos</h2>
<?php
 $consulta="SELECT * FROM persona WHERE apodo in (SELECT apodo2 FROM amistad WHERE apodo1='$apodo') limit 3";

 $datos = mysqli_query($conexion,$consulta);
 while ($fila=mysqli_fetch_array($datos)) {

 
?>

    <section class="recuadro">
              <img src="<?php echo $fila['FotoPerfil'] ?>" height="150">
              <h2><?php echo $fila['Nombre'] . "" .$fila['Apellidos'] ?></h2>
              <p class="parrafo">
              	<?php echo $fila['Descripcion']?>
              </p> 
              <a href="<?php echo "Perfil.php?apodo=".$fila['apodo'] ?> " class="boton">Ver Perfil</a><br>    	
    </section>
 <?php  
 }
 ?> 
    </section>
    <section id="recuadros">
    	     <h2>Mis Fotos</h2>
           <?php
            $consulta="SELECT * FROM fotos WHERE apodo='$apodo' limit 3";
            $datos=mysqli_query($conexion,$consulta);
            while($fila=mysqli_fetch_array($datos)) {
?>              


    	     <section class="recuadro">
    	     	<img src="<?php echo $fila['NombreFoto'] ?>" height="200" width="280" >
    	     </section>
    	     <?php
                }
           ?>      




    </section>  

  </body>



</html>