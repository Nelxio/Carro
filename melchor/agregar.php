
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
<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<div class="login-box">
      <form action="agregar.php" method="POST">
        <h4>ingresa nombre</h4>
         <input name="nombre" type="text" placeholder="Ingresa tu Nombre"> <br>
         <h4>descripcion</h4>
         <input name="descripcion" type="text" placeholder="Ingresa tu descripcion"><br>
          <h4>Consola</h4>
         <input name="Consola" type="text" placeholder="Ingresa la Consola"> <br>
         <h4>Precio</h4>
         <input name="precio" type="text" placeholder="Ingresa el Precio"> <br>
         <h4>Existencia</h4>
         <input name="existencia" type="text" placeholder="Existencia"> <br>
         <h4>imagen</h4>
         <input name="foto" type="file" placeholder="imagen">
         <input type="submit" value="Enviar">
    </form>

</div>
  
</body>
</html>
    <?php 
    session_start(); 
    require("conexion.php"); 

    $message = '';

    if (!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['precio']) && !empty($_POST['existencia']) && !empty($_POST['Consola'])){
    $sql = "INSERT INTO productos(nombre,descripcion,precio,existencia,foto, Consola) VALUES (:nombre, :descripcion, :precio, :existencia, :foto, :Consola)";
    
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':descripcion', $_POST['descripcion']);
    $stmt->bindParam(':precio', $_POST['precio']);
    $stmt->bindParam(':existencia', $_POST['existencia']);
    $stmt->bindParam(':Consola', $_POST['Consola']);
    $stmt->bindParam(':foto', $_POST['foto']);

     if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito.';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta.';
    }
  }else{
    echo "<script type='text/javascript'>
    alert('Complete todos los campos');
      </script>";
  }
?> 