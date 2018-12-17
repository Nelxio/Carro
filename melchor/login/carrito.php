<?php

  session_start();



  $conexion=mysqli_connect('localhost','root','','php_login_database');

  if(!empty($_POST['id'])){
    $id = $_POST['id'];
    $records = "DELETE FROM carro WHERE id = '$id' ";
    mysqli_query($conexion, $records);
  }

  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>mostrar datos</title>
    <link type="text/css" rel="stylesheet" href="../CSS/style.css" />
    <link type="text/css" rel="stylesheet" href="../CSS/Productos.css" />
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
          <a href="login/logout.php" id="lnkLogout">&#128682;Salir</a>
        </nav>
      </div>
    </header>
    <br>
      <div class="login-box">
  <table border="1" style="color: black; width: 90%; font-size: 30px">
    <tr>
      <td>nombre</td>
      <td>Precio</td>
      <td></td>  
    </tr>
    <?php 
    $user = $_SESSION['guardarID'];

    $sql="SELECT * FROM carro WHERE detalles = '$user' ";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>

      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['precio'] ?></td>
      <td>
        <form method="POST" action="carrito.php">
        <input type="submit" name="eliminar" value="Eliminar">
        <input type="hidden" name="id" value="<?php echo $mostrar['id'] ?>">
        </form>
       </td>
    </tr>
  <?php 
  }
   ?>
  </table>
  <br>
  <br>
      <button style="width: 80px; margin-left: 80%">Pagar</button>
    
    </body>
  </html> 