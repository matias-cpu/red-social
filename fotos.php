<?php
    include("php/conexion.php");
    include("php/validarsesion.php");
?>

<!DOCTYPE html>
<html>

     <head>
          <title>Fotos</title>
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
      <img src="<?php echo "$_SESSION[FotoPerfil]" ?>" />
      <h1><?php echo "$_SESSION[nombre] $_SESSION[apellidos]" ?></h1>

      <form action="php/cambiarfoto.php" method="POST" enctype="multipart/form-data"/>cambiar Foto de Perfil:<input name="archivo" id="archivo" type="file" accept=".jpg, .jpeq, .png" required />
      <input type="submit" name="subir" value="subir"/></form>
</section> 
      <section id="recuadros">
                <h2>Mis Fotos</h2>
                <h3><form action="php/cambiarfoto.php" method="POST" enctype="multipart/form-data"/>Añadir imagen: <input name="archivo" id="archivo" type="file" accept=".jpg, .jpeq, .png" required /> 
                <input type="submit" name="subir" value="subir"/></form>
                </h3>

          <?php
            $consulta="SELECT * FROM fotos WHERE apodo='$apodo' ";
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