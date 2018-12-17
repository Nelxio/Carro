<?php

  session_start();
$conexion=mysqli_connect('localhost','root','','php_login_database');
/*if(!empty($_POST['id'])){
$id = $_POST['id'];
$records = "DELETE FROM productos WHERE id='$id';";
mysqli_query($conexion, $records);
}*/
if(isset($_POST['productos'])){
$id = $_POST['productos'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$user = $_SESSION['guardarID'];
$records = "INSERT INTO carro (id, nombre, precio, detalles) VALUES ('$id', '$nombre', '$precio', '$user');";
mysqli_query($conexion, $records);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>mostrar datos</title>
    <link type="text/css" rel="stylesheet" href="../CSS/style.css" />
    <link type="text/css" rel="stylesheet" href="../CSS/Productos.css" />
    <script>localStorage.getItem('user');</script>
  </head>
  <body onload="document.getElementById('user').value = localStorage.getItem('user');">
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
    <br>
    <table border="1" style="color: black; width: 90%; font-size: 18px">
      <div class="produc">
        <?php
        $sql="SELECT * from productos";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <div class="tarjeta">
          <div class="img">
            <img src=<?php echo "'".$mostrar['foto']."'"; ?>>
          </div>
          <div class="opciones">
            <form action="productos.php" method="POST">
              <h3><?php echo $mostrar['nombre']; ?></h3>
              <h3><?php echo $mostrar['precio']; ?></h3>
              <button id="agregar" type="submit" >Agregar</button>
              <input type="hidden" name="productos" value="<?php echo $mostrar['ID']?>">
              <input type="hidden" id='user' name="nombre" value="<?php echo $mostrar['nombre']; ?>">
              <input type="hidden" id='user' name="precio" value="<?php echo $mostrar['precio']; ?>">
            </form>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
      <script type="text/javascript">
      function InsertarCarrito()
      {
      <?php
      # code...
      "INSERT INTO carro
      (nombre,precio,detalles) SELECT (nombre, precio) FROM productos";
      
      ?>
      }
      </script>
    </body>
  </html>