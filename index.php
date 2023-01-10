<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html and plug/css/botones prueba.css"> 
	<script src="html and plug/jquery-3.5.1.min.js"></script>
    <script src="html and plug/main.js"></script>
    <script src="https://kit.fontawesome.com/1e6da0274e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>ADG Mascotas</h1>
    
    <div class="redes-container" style="float:right">
        <ul >
            <li><a href="a" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="a" class="instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="a" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
    </div>
    </header>
	<!--   Tarjetas-->
    <div class="title-cards">
		<h2>Catalogo Completo</h2>
	</div>
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="html and plug/css/img/CoverVideo.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Primeros Auxilios para perros</h3>
		<p>Aprende que hacer con tu mascota en caso de una emergencia</p>
		<a href="html and plug/textos.html">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="html and plug/css/img/cover-ebook.png">
	</figure>
	<div class="contenido-card">
		<h3>E-Book (40% off)</h3>
		<p> Llévate ésta fantástica herramienta y mantenla siempre a la mano con 40% off
             
            </p>
		<a href="https://go.hotmart.com/U75172007C">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="html and plug/css/img/Coverpasteleria.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Alimentacion saludable y creativa</h3>
		<p>Logra que tu mascota alcance la plenitud alimentandolo de forma natural, fresca y sin conservantes ni aditivos.
		</p>
		<a href="html and plug/pasteleria.html">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="html and plug/css/img/coverpeluqueria.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Peluqueria para perros</h3>
		<p>Estudiar peluquería canina nunca fue tan fácil. Aprende un arte que puedas desempeñar en cualquier lugar.</p>
		<a href="html and plug/peluqueria.html">Leer Màs</a>
	</div>
</div>

</div>
<!--Fin   Tarjetas-->
<!-- pop up-->
<div class="pop-up">
	<div class="pop-up-wrap">
		<div class="subcription">
			<div class="line"></div>
			<i class="far fa-times-circle" id="close"></i>
			<div class="sub-content">
				<h2>SUSCRIBETE</h2>
				<p>Y recibe descuentos o codigos promocionales.</p>
				<form method="post">
					<input type="name" class="subs-names" name="name"     placeholder="Nombre">
					<input type="email" class="subs-email" name="email" placeholder="Esccribe tu correo electronico">
					<input class="subs-send" type="submit" name="register"></input>
					<a href="#"><img src="img/icons8-play-button.svg" alt=""></a>
					<a href="#"><img src="img/icons8-facebook.svg" alt=""></a>
					<a href="#"><img src="img/icons8-instagram.svg" alt=""></a>
				</form>
				<?php
				include ("registrar.php");
				?>
			</div>
			
			<div class="line"></div>
		</div>
	</div>
</div>
<!--fin pop up-->

</body>

</html>