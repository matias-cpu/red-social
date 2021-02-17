
<!DOCTYPE html>
<html>

     <head>
          <title>Registro</title>
          <meta charset="utf-8"/>
          <link href="css/estilo.css" rel="stylesheet">
</head>


  <body>
  	<header>
  	<div id="logo">
  		<img src="img/logo.jpg" alt="logo"></a>
  	</div>
  	
    </header>
    
    <section id="formulario">
    	<form name="Nuevo Usuario" method="POST" action="php/ConexionCrearUsuario.php">
    	Apodo:<br>	
        <input type="text" name="apodo" pattern="[a-zA-z0-9]+" placeholder="Ingrese su Apodo" required><br> 
        contraseña:<br>
        <input type="password" name="contraseña" maxlength="20" autocomplete="new-password" placeholder="Ingrese su contraseña" required><br>
        Nombre:<br>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" required><br>
        Apellidos:<br>
        <input type="text" name="apellidos" placeholder="Ingrese su Apellidos" required><br>
        Email:<br>
        <input type="Email" name="correo" placeholder="Ingrese su Email" required><br>
        Edad:<br>
        <input type="number" name="edad" min="18" placeholder="Ingrese su Edad" required><br>
         Descripcion:<br>
        <textarea name="descripcion" placeholder="Ingrese su Descripcion" required></textarea><br>

         <hr><!--linea -->

        <input type="submit" name="enviar" class="boton" value="Registrate">
        <input type="reset" class="boton" value="Borrar">

     

    	</form>
    </section>
     <section id="formulario2">
     	        <h2>Inicia sesion</h2>
     	        <form name="contacto" method="POST" action="php/IniciarSesion.php">
     	       Apodo:<br>
     	       <input type="text" name="apodo" placeholder="Ingrese su Apodo" required><br>
     	       contraseña:<br>
     	       <input type="password" name="contraseña" autocomplete="off" placeholder="Ingrese su contraseña" required><br>
     	       <hr><!---linea--->
     	       <input type="submit" name="enviar" class="boton" value="Iniciar Sesion">
     	        	
     	        	
     	        </form>
     </section>



  </body>



</html>