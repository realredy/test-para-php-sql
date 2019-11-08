<?php  
// $cnc variable de la coneccion 
  include 'coneccion.php'; 

  
// $sth = $cnc->prepare("SELECT 'nombre' FROM  'peliculas'");
// $sth->execute( ); 
// $cuenta_col = $sth->columnCount();
// print("Antes de execute(), el conjunto de resultados tiene $cuenta_col columnas (debería ser 0)\n");
 
 
 

                 /* seleccionar este funciona*/
// $gsent = $cnc->prepare("SELECT * FROM peliculas");
// $gsent->execute();
 
// while($result = $gsent->fetch(PDO::FETCH_ASSOC))
// // $result = $gsent->fetch(PDO::FETCH_ASSOC);
// {
//    echo $result['nombre'] . '<br>'; 
//    echo $result['genero'] . '<br>';
// }



               /*insertar datos funciona */
// $nombre = 'nemo';
// $genero = 'suspenso';
// $capitulos = '20';
// $inser = "INSERT INTO peliculas (nombre, genero, capitlos) VALUES (?,?,?)";

// $objet = $cnc->prepare($inser);
// $salio = $objet->execute([$nombre,$genero,$capitulos]);

 
                 /*funcion YUPIIII genera una tabla*/
// $tbl = "CREATE TABLE newtest . ingles ( id INT NOT NULL AUTO_INCREMENT , nombre VARCHAR(120) NOT NULL , `genero` VARCHAR(200) NOT NULL , capitlos INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

// $genera_tabla = $cnc->prepare($tbl);
// $v = $genera_tabla->execute();

// if($v == true){
//     echo 'func';
// }else{
//     echo 'no func';
// }



         /* buena practica*/
// try { 
     
//     echo inverse() . "\n";
// } catch (Exception $e) {
//     echo 'Excepción capturada: ',  $e->getMessage(), "\n";
// } finally {
//     echo "Primer finally.\n";
// }






?>