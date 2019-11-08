

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
 

 
<script>
  const forma = document.querySelector('#form_buscar');//formulario
  const fol = document.querySelector('#searchs'); //input
  const iner = document.querySelector('#bod'); 
    



 window.onload = function() {
                      
fetch('json.php').then(dat=> dat.json())
        .then(function (dat){
console.log(dat)
for(let lo of dat) {
  iner.innerHTML +=   ` <div class="info">
               <div class="wrapper_img">
                 <img src="${lo.imagen}">
                 <h1>${lo.nombre}</h1>
               </div>
                <table>
                <tr>
                <td>ciudad</td>
                <td>${lo.ciudad}</td>
                </tr>
                <tr>
                <td>provincia</td>
                <td>${lo.provincia}</td>
                </tr>
                <tr>
                <td>tipo</td>
                <td>${lo.tipo}</td>
                </tr>
                <tr>
                <td>estrellas</td>
                <td>${lo.estrellas}</td>
                </tr>
                <tr>
                <td>capacidad por Hab.</td>
                <td>${lo.capacidad}</td>
                </tr>
                <tr>
                <td>Habitacion Modo</td>
                <td>${lo.tipo_hab}</td>
                </tr>
                </table>
              </div>`
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
                                     iner.innerHTML +=  ` <div class="info">
               <div class="wrapper_img">
                 <img src="${ma.imagen}">
                 <h1>${ma.nombre}</h1>
               </div>
                <table>
                <tr>
                <td>ciudad</td>
                <td>${ma.ciudad}</td>
                </tr>
                <tr>
                <td>provincia</td>
                <td>${ma.provincia}</td>
                </tr>
                <tr>
                <td>tipo</td>
                <td>${ma.tipo}</td>
                </tr>
                <tr>
                <td>estrellas</td>
                <td>${ma.estrellas}</td>
                </tr>
                <tr>
                <td>capacidad por Hab.</td>
                <td>${ma.capacidad}</td>
                </tr>
                <tr>
                <td>Habitacion Modo</td>
                <td>${ma.tipo_hab}</td>
                </tr>
                </table>
              </div>`
                                      
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