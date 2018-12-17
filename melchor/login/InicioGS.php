<?php

  session_start();

  echo $_SESSION['guardarEMAIL'];


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
	<link rel="stylesheet" type="text/css" href="assets/css/Inicio.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link rel="shortcut icon" href="Multimedia/GS.ico" />
</head>
<body>
	<header class="header2">
		<div class="wrapper">
			<div class="logo">GameStar</div>
			<nav>
                    <a href="InicioGS.php>" id="lnkPerfil">&#10026; Inicio</a>
                    <a href="perfil.php" id="lnkPerfil">&#128129; Perfil</a>
                    <a href="productos.php" id="lnkPerfil">&#128218; Productos</a>    
                    <a href="carrito.php"  id="lnkCompra">&#128722;Carrito</a>  
                    <a href="Conocenos.php"  id="lnkLogin">&#127970;Conocenos</a>
                    <a href="logout.php" id="lnkLogout">&#128682;Salir</a>
        	</nav>
		</div>
	</header>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="title">
 		<h1>Bienvenido<br/>Jugador</h1>
 	</div>
	<br>
	<div class="slider" >
			<ul >
				<li>
  					<img src="Multimedia/Halo 5.png" alt="" class="Image">
 				</li>
				<li>
  					<img src="Multimedia/Dark.jpg" alt="" class="Image">
				</li>
				<li>
  					<img src="Multimedia/MKX.jpg" alt="" class="Image">
				</li>
				<li>
  					<img src="Multimedia/GTAV.jpg" alt="" class="Image">
				</li>
				
			</ul>
		</div>

		<!-- Ofertas-->
		<div id="pricing-table" class="clear">
    <div class="plan">
        <h3><span>¡50%!</span></h3>
        <a class="signup" href="">Ir</a>         
        <ul>
            <li class="t">PC</li>
            <li><img src="https://media.giphy.com/media/Bm2qMzWeqHW2k/giphy.gif" width="90" height="90"></li>
            			
        </ul> 
    </div>
    <div class="plan" id="most-popular">
        <h3><span>¡30%!</span></h3>
        <a class="signup" href="">Ir</a>        
        <ul>
            <li class="t">Nintendo</li>
            <li><img src="https://media.giphy.com/media/3o6ZtjqdcQfuno2WPK/giphy.gif" width="90" height="90"></li>			
        </ul>    
    </div>
    <div class="plan">
        <h3><span>¡20%!</span></h3>
		<a class="signup" href="">Ir</a>
        <ul>
            <li class="t">Xbox</li>
            <li><img src="https://media.giphy.com/media/1iTHo2aLKHaJw1DW/giphy.gif" width="100" height="100"></li>
            			
        </ul>
    </div>
    <div class="plan">
        <h3><span>¡10%!</span></h3>
        <a class="signup" href="">Ir</a>		
        <ul>
            <li class="t">PlayStation</li>
            <li><img src="https://media.giphy.com/media/K90ckojkohXfW/giphy.gif" width="100" height="100"></li>
            			
        </ul>
    </div> 	
</div>

	
</body>
</html>