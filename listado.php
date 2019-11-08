
<?php 
include 'includes/coneccion.php';
//conectamos con la base de datos
$cn = conectar::ctn();
//iniciamos las  variables de seccion
if(!isset($_SESSION)){
	session_start(); }

//guardamos la seccion del nombre
  // $_SESSION['user'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test de talento destinia</title>
	<link rel="stylesheet" type="text/css" href="scss/estilo.css">
	<script src="js/java.js"></script>
</head>
<body>
<?php 
include 'includes/head.php';
 ?>
 <!-- cuerpo del listado -->
<section id="listado">
	<div class="left">
		<span><?php if(isset($_SESSION['user'] )){echo 'hola: ' . $_SESSION['user']; }
		 ?></span>
		<h1>Inserta los datos para las fichas de propiedades.</h1>
		<?php 	
     if(isset($_GET['msg'])){
     	echo "<span class='msg'> " . $_GET['msg'] . "</span>";
     }else{
     	null;
     }
	 ?>
		<form id="entrada_datos" method="post" action="procesa.php">
             <label for="ciudad">Ciudad</label>
			<input type="text" name="ciudad" id="ciudad" placeholder="ciudad" required>
			<label for="provincia">provincia</label>
			<input type="text" name="provincia" id="provincia" placeholder="provincia" required>
			<label for="url">Url de la imagen</label>
			<input type="text" name="url" id="url">
			<label for="ciudad">tipo</label>
			  <select name="tipo">
			  <option value="" selected>--------</option>
			  <option value="hotel">Hotel</option> 
			  
			  <option value="apartamento">Apartamento</option>
			</select id="tipo" >
			<label for="nomb_prop">Nombre</label>
			<input type="text" name="nombre_prop" id="nomb_prop">
             <label id="est">Estrellas</label>
			<input type="number" name="estrellas" id="est" min="1" max="5">
			<label for="den">Tipo de habitacion</label>
			<select name="den" id="den" >
			  <option value="" selected>--------</option>
			  <option value="sencilla">sencilla</option> 
			  <option value="doble">doble</option>
			  <option value="matrimonial">matrimonial</option>
			</select>
			<label for="cant_disp">Cantidad de Apt. Disponibles</label>
			<input type="number" name="cant_disp" id="cant_disp" min="1" max="315">
			<label for="capacidad">Capacidad Personas</label>
			<input type="number" name="capacidad" id="capacidad">
			<input type="submit" value="enviar datos">

 </form>
 <section class="nav">
 	<nav><a href="/">home</a> <a href="logout.php?msg=<?php
 	echo $_SESSION['user']?>">logOut</a></nav>
 </section>
	</div>



</section>




	
</body>
</html>
