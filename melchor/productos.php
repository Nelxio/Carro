<?php
$conexion=mysqli_connect('localhost','root','','php_login_database');
if(!empty($_POST['id'])){
$id = $_POST['id'];
$records = "DELETE FROM productos WHERE id='$id';";
mysqli_query($conexion, $records);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>mostrar datos</title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header2">
      <div class="wrapper">
        <div class="logo">GameStar</div>
        <nav>
          
          <a href="inicioGS.php" id="lnkPerfil">&#10026; Inicio</a>
          <a href="usuarios.php" id="lnkPerfil">&#128129; Ver usuarios</a>
          <a href="productos.php" id="lnkPerfil">&#128218; Productos</a>
          <a href="agregar.php"  id="lnkCompra">&#128722;Agregar Productos</a>
          <a href="login/logout.php" id="lnkLogout">&#128682;Salir</a>
        </nav>
      </div>
    </header>
    <br>
    <table border="1" style="color: black; width: 90%; font-size: 18px">
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Precio</td>
        <td>Existencia</td>
        <td>Consola</td>
      </tr>
      <div class="produc">
        <?php
        $sql="SELECT * from productos";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $mostrar['ID']; ?></td>
          <td><?php echo $mostrar['nombre']; ?></td>
          <td><?php echo $mostrar['descripcion']; ?></td>
          <td><?php echo $mostrar['precio']; ?></td>
          <td><?php echo $mostrar['existencia']; ?></td>
          <td><?php echo $mostrar['Consola']; ?></td>
          <td>
            <form method="POST" action="productos.php">
              <input type="submit" name="eliminar" value="Eliminar">
              <input type="hidden" name="id" value="<?php echo $mostrar['ID'] ?>">
            </form>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
    </div>
    
  </body>
</html>