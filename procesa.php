<?php 	
include 'includes/coneccion.php';
//conectamos con la base de datos
$cn = conectar::ctn();
//iniciamos las  variables de seccion
if(!isset($_SESSION)){
	session_start(); }

$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$imagen = $_POST['url'];
$tipo = $_POST['tipo'];
$nombre = $_POST['nombre_prop'];
$estrellas = $_POST['estrellas'];
$hab_tipo = $_POST['den'];
$disponible = $_POST['cant_disp'];
$capacidad = $_POST['capacidad'];

 
// echo $ciudad . "<br>" . $provincia . "<br>" . $imagen . "<br>" . $tipo . "<br>" . $nombre . "<br>" . $estrellas . "<br>" . $hab_tipo . "<br>" . $disponible . "<br>" . $capacidad . "<br>";

 
$cn2 = conectar::insert($cn,$ciudad, $provincia, $imagen, $tipo, $nombre, $estrellas, $hab_tipo, $disponible, $capacidad);

if($cn2 == true){
	header("location:listado.php?msg=agregado correctamente");
}else{
	echo 'no nada';
}

 ?>