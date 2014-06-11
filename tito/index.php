<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Estilos/estilo.css" rel="stylesheet" type="text/css" />
        <title>Friends</title>
    </head>
    <body class="imagenDeFondo">
        <form action="Negocios/postlogin.php" method="post"  id='login'>
  <div class="logo">
      <div>
      <a href="" id="logo-a">
        Book of Friends
      </a>
      </div>
  </div>
  <div class='contenedor'>
     <div class="titulo">Correo elctrónico</div>
     <div class="titulo">Contraseña</div> 
  </div>
  <div class='contenedor'>
            <div class="formulario">
              <input type="text" name="usuario">
            </div>
            <div class="formulario">
             <input type="password" name="password">
            </div>
            <div class="button">
             <input type="submit" value="Entrar" name="btnLogin">
            </div>
  </div>
  <div class='contenedor'>
            <div class="texto">
                <input type="checkbox" name="session"> 
                <span>No cerrar sesión</span>
            </div>
            <div class="texto">
                <a href="#">¿Has olvidado tu contraseña?
            </div>
  </div>
  
  
</form>
    </body>
</html>