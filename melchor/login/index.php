<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html> 
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a GameStar</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/master.css"> 
     <link rel="stylesheet" type="text/css" href="assets/css/talacha.css">
  </head>
  <body>
    <div class="login-box">
     <?php if(!empty($user)): ?>
            <br> Welcome. <?= $user['email']; ?>
            <br>You are Successfully Logged In
            <a href="logout.php">Logout</a>
     <?php else: ?>
      <img src="assets/img/gs.png" style="width: 190px">
      <h1></h1>

      <a href="login.php" class="button"  id="btn1">Iniciar sesión</a>
      <a href="signup.php" class="button" id="btn1">Regístrate</a>
    <?php endif; ?>   
     </div>
   
  </body>
</html>
 