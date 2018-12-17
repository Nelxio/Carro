<?php
$conexion=mysqli_connect('localhost','root','','php_login_database');

  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link type="text/css" rel="stylesheet" href="css/Login.css" />
	<link rel="stylesheet" href="assets/css/Inicio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Estilos.css">
    <link rel="stylesheet" type="text/css" href="assets/css/talacha.css">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
</head>
<body>

    <header class="header2">

      <div class="wrapper">
       <div class="logo">GameStar</div>
       <nav>
            <a href="InicioGS.php" id="lnkPerfil">&#10026; Inicio</a>
          <a href="perfil.php" id="lnkPerfil">&#128129; Perfil</a>
          <a href="productos.php" id="lnkPerfil">&#128218; Productos</a>
          <a href="carrito.php"  id="lnkCompra">&#128722;Carrito</a>
          <a href="conocenos.php"  id="lnkLogin">&#127970;Conocenos</a>
          <a href="logout.php" id="lnkLogout">&#128682;Salir</a>
       </nav>
   </div>
</header>  
<div class="login-box3">
  <table>
    <tr>
      <td><img src="Multimedia/Carlos.jpeg" width="200" align="left" hspace="15" vspace="100" ></td>
      <td>
        <div id="Texto_uno">
            <b>Nombre:</b>
        </div>
        <div id="Texto_dos">
            Eduardo Anaya Becerra   
        </div> 
        <br clear="all">
        <br>
        <hr>

        <div id="Texto_uno">
         <b> Dirección:</b>
     </div>
     <div id="Texto_dos">
        Sendero de los frailes #512 int 2
    </div>
    <br clear="all">
    <br>
    <hr>

    <div id="Texto_uno">
        <b>Número de Telefono:</b>
    </div>
    <div id="Texto_dos">
        427-118-03-95
    </div>
    <br clear="all">
    <br>
    <hr>

    <div id="Texto_uno">
        <b>Formas de pago:</b>
    </div>
    <div id="Texto_dos"> 
        Tarjeta
    </div>    
    <br clear="all">
    <br>
    <hr>

    <div id="Texto_uno">
        <b> Compras realizadas:</b>
    </div>
    <div id="Texto_dos">
        20 compras realizadas
    </div>
    <br clear="all">
    <br>
    <hr>    
    <div id="Texto_tres">
        <a id= "Boton" href="" class="button blue">Cambiar Contraseña</a>
    </div>
      </td>
    </tr>
    
  </table>
    
    
<hr>
        
    

</div>



</div>
</body>
</html>

