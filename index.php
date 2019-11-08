

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test de talento destinia</title>
	<link rel="stylesheet" type="text/css" href="scss/estilo.css">
	<script src="js/java.js"></script>
</head>
<body>
	<!-- head -->
  <head class="orage">
     <div class="logo">
     	<img src="img/destinia.png" alt="">
      <img src="img/lg.jpg" alt="" class="loguin">
      <a href="listado.php"><img src="img/lista.jpg" alt="" class="lista"></a>
     </div>
</head>
<?php   
if(!isset($_SESSION)){
  session_start(); }
if(isset($_SESSION['user'])){

}else{ ?>


          <!-- section form -->
<section id="loguin" style="display:none;">
  <form id="form_loguin">
    <input type="text" name="nombre" required>
    <input type="password" name="pass" required>
    <input type="submit">
  </form>
</section>
<?php


}

 ?>


<form id="form_buscar">
  <label for="search">Buscar una propiedad en específico</label>
  <input type="text" name="search" id="searchs" value="">
  <input type="submit" value="buscar" >
</form>

<section id="bod">
  
</section>


<?php   




 ?>






  <script>
//  console.log('funciona');
// /*seleccionamos el formulario en una variable*/
// var fo = document.querySelector('#form_loguin');

// 	 // var formulario = document.querySelector("#form_loguin");
	 
// 	//creamos la funcion que capta el envio del formulario
// 	fo.addEventListener("submit", function(m){
//     //impedimos que se refresque la pagina
// 	m.preventDefault();
// 	console.log(fo);
// 	//capturamos los datos del formulario
//      var data = new FormData(fo);
//     //guardamos en variables los datos obtenidos en el formulario
//      var nmb = data.get('nombre');
//      var pas = data.get('pass');
//     // enviamos el formulario via post
//      fetch('seccion.php',{
//      	method:'post',
//      	body: data
//      }).then(d=> d.text())
//        .then(d=>{ 
//        	// console.log(d + 'esto viene desde la consola');
//      	if(d == true){
//      		window.location.href = "listado.php";
//      	}
//      })
  
//   });

     
</script>

<script>
  const forma = document.querySelector('#form_buscar');//formulario
  const fol = document.querySelector('#searchs'); //input
  const iner = document.querySelector('#bod'); 
    



 window.onload = function() {
                      
fetch('json.php').then(dat=> dat.json())
        .then(function (dat){
console.log(dat)
for(let lo of dat) {
  iner.innerHTML += `
                                        <b>${lo.ciudad}</b>
                                     `
}
                    return lol = dat;
                    
                        }); 
viene();
                        };



var lol = "";
    
 
            
                  




                    function viene(){
                       iner.innerHTML = "";

                       let dosmija = fol.value.toLowerCase();
                          for(let ma of lol) {
                             let mas = ma.ciudad.toLowerCase();  
                               if(mas.indexOf(dosmija) !== -1){ 
                                      
                                     console.log(ma.ciudad)
                                     iner.innerHTML += `
                                        <b>${ma.ciudad}</b>
                                     `
                                      
                              } 
                                    // console.log(dosmija)
                                  }  
                                   }




                               
 
fol.addEventListener("keyup", viene); 
/*****************************************/
     
      
    viene();
  



  // (function(){  console.log(salida)  })(); 
   

   
    
</script>
	
</body>
</html>