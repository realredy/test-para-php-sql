<?php 

include 'includes/coneccion.php';
//conectamos con la base de datos
$cn = conectar::ctn();
//iniciamos las  variables de seccion
if(!isset($_SESSION)){
	session_start(); }

// guardamos los datos recibidos en variables
$nombre = $_POST['nombre'];
$passw   =  $_POST['pass']; 
$pass   = md5( $_POST['pass']); 



//comprobamos que no este nulos los parametros
if($nombre !== "ricardo" || $passw !== "ric123"){
	header('location:localhost/index.php');
 } else{

// $inser = "INSERT INTO usuarios (nombre, pass) VALUES (?,?)";
// $objet = $cn->prepare($inser);
// $sale = $objet->execute([$nombre,$pass]);
// if($sale == true){

	$_SESSION['user'] = $nombre;  
	echo true;
	 
}

// }




$cn = null; 

 ?>