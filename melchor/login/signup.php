<?php
require 'database.php';
$message = '';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
$sql = "INSERT INTO users (email, password, user) VALUES (:email, :password, :user)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user', $_POST['user']);
$stmt->bindParam(':email', $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$stmt->bindParam(':password', $password);
if ($stmt->execute()) {
$message = 'Nuevo usuario creado con éxito.';
} else {
$message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta.';
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/master2.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="login-box">
      <img src="assets/img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Regístrate</h1>
      <form action="signup.php" method="POST">
        <input name="user" type="text" placeholder="Ingresa tu nombre">
        <input name="email" type="text" placeholder="Ingresa tu correo">
        <input name="password" type="password" placeholder="Ingresa tu contraseña">
        <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
        <input type="submit" value="Enviar">
        <a href="login.php"> <strong class="letras">Iniciar Sesión</strong> </a>
      </form>
    </div>
    
  </body>
</html>