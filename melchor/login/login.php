
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/master.css">
     <link rel="stylesheet" type="text/css" href="assets/css/talacha.css">

  </head> 
  <body>

       <div class="login-box">
              <img src="assets/img/logo.png" class="avatar" alt="Avatar Image">
                  <h1>Inicio de Sesión</h1>

            <form method="post" action="login.php" id="frmLogin">
                <table id="tablaLogin">
                   
                 <label for="username">Nombre Usuario</label>

                 
                 <input type="text" name="email"  placeholder="Ingresa tu correo" id="txtUsuario" class="textBox">
                     
                 <label for="password">Contraseña</label>

                 <input type="password" name="password" placeholder="Ingresa tu contraseña" id="txtClave" class="textBox">
                                            
                 <input type="submit" value="Iniciar" name="btnIngresar" id="btnIngresar" >     
                 <a href="signup.php" id="lnkRegistrarUsuario"><h4 align=" center" style="color: #000000 ">Registrate aqui</h4></a>
                      
                </table>
                    <input type="hidden" name="accion" value="login">
            </form>
        </div>

  </body>
</html>

<?php

  session_start();

  //if (isset($_SESSION['user_id'])) {
    //header('Location:../Inicio.php');
  //}

  $email = $_POST['email'];
  $password = $_POST['password'];

  require_once 'database.php';
  $funciones = new Funciones();
  $conexion = $funciones->conectar();
  $conexion->set_charset("utf8");
  $query = "SELECT * FROM users WHERE email = '".$email."' AND PASSWORD = '".$password."';";
  $resultado = $conexion->query($query);

  //echo $query;

    $r = $resultado->fetch_assoc();

    $_SESSION['guardarID'] = $r['id'];
    $_SESSION['guardarEMAIL'] = $r['email'];

    //echo  $_SESSION['guardarID']. $_SESSION['guardarEMAIL'];

;


  echo "<script type='text/javascript'>
     localStorage.setItem('user', '".$r['id']."');
     localStorage.setItem('email', '".$r['email']."');
   </script>";

   if ($r['user'] == "") {
     echo "<script type='text/javascript'>
     alert('Ingrese datos validos');
   </script>";

   }else if($r['user']=='Xionel'){
     header('Location: ../InicioGS.php');
   }else if($r['user']=!""){
    header('Location: InicioGS.php');
   }

//http://localhost/melchor/login/login.php
?>