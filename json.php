<?php 
include 'includes/coneccion.php';
//conectamos con la base de datos
$cn = conectar::ctn();
//iniciamos las  variables de seccion
if(!isset($_SESSION)){
	session_start(); }

//guardamos la seccion del nombre
  // $_SESSION['user'];




$cns = conectar::formatjson($cn);

while($result = $cns->fetch(PDO::FETCH_ASSOC))
// $result = $gsent->fetch(PDO::FETCH_ASSOC);
{
	$salidas[] = array('ciudad'=>$result['ciudad'] ,
						'provincia'=>$result['provincia'] ,
						'imagen'=>$result['url_img'],
						'tipo'=>$result['tipo'],
						'nombre'=>$result['nombre_propiedad'],
						'estrellas'=>$result['estrellas'],
						 'tipo_hab'=>$result['tipo_hab'],
						 'cantidad_disp'=>$result['cantidad_disp'],
						 'capacidad'=>$result['capacidad']);
     

// }
}

$json_string = json_encode($salidas);
echo $json_string;

 ?>