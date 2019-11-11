<?php
if(!isset($_SESSION)){
  session_start(); }
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
	<!-- head -->
  <head class="orage">
     <div class="logo">
     	<img src="img/destinia.png" alt="">
      <img src="img/lg.jpg" alt="" class="loguin">
      <?php
      if(isset($_SESSION['user'])){
      ?>
      <a href="listado.php"><img src="img/lista.jpg" alt="" class="lista"></a>
      <?php } ?>
     </div>
</head>
<?php   

if(isset($_SESSION['user'])){

}else{ ?>


          <!-- section form -->
<section id="loguin" >
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
  <div class="leg">
  <label for="tp_src">Buscar por ciudad o nombre del hotel</label>
    <select id="tp_src">
      <option value="nombre">Nombre</option>
      <option value="ciudad">Ciudad</option>
    </select>
  </div>
  <div class="right">
   
  <label for="search">Buscar propiedad por ciudad</label>
  <input type="text" name="search" id="searchs" value="">
  </div>

  <!-- <input type="submit" value="buscar" > -->
</form>

<section id="bod">
  
</section>
 
<script>
 console.log('funciona');
/*seleccionamos el formulario en una variable*/
var fo = document.querySelector('#form_loguin');

	 // var formulario = document.querySelector("#form_loguin");
	 
   
	//creamos la funcion que capta el envio del formulario
	fo.addEventListener("submit", function(m){
    //impedimos que se refresque la pagina
	m.preventDefault();
	// console.log(fo);
	//capturamos los datos del formulario
     var data = new FormData(fo);
    //guardamos en variables los datos obtenidos en el formulario
     var nmb = data.get('nombre');
     var pas = data.get('pass');
    // enviamos el formulario via post
     fetch('seccion.php',{
     	method:'post',
     	body: data
     }).then(d=> d.text())
       .then(d=>{ 
       	// console.log(d + 'esto viene desde la consola');
     	if(d == true){
         data.value = "";
     		window.location.href = "listado.php";
     	}
     });
    });
   
</script>
 
<script>
   const forma = document.querySelector('#form_buscar');//formulario
  const fol = document.querySelector('#searchs'); //input
  const iner = document.querySelector('#bod'); 
  
    var sl = document.querySelector('#tp_src');
   
     
  
  
  
  window.onload = function() {
    var s = '⭐';                 
fetch('json.php').then(dat=> dat.json())
        .then(function (dat){
// console.log(dat)
for(let lo of dat) {
  iner.innerHTML +=   ` <div class="info">
               <div class="wrapper_img">
                 <img src="${lo.imagen}" id="na">
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
                <td>`+   s.repeat(lo.estrellas) + `</td>
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
}//for closed
                    return lol = dat;// pasa los datos a la  variable lol
                     
                   
                        }); //then closed
viene(); //inicializa la funcion aunque no se ha creado.
                        }// on load closed



var lol = "";
  function viene(){

     iner.innerHTML = "";

                       let dosmija = fol.value.toLowerCase();
                       
                          for(let ma of lol) {
                            var slf = sl.value.toLowerCase();
                            if(slf == "ciudad"){
                              var mas = ma.ciudad.toLowerCase(); 
                            } else{
                                mas = ma.nombre.toLowerCase();
                            }
                              
                               if(mas.indexOf(dosmija) !== -1){ 
                                      var s = '⭐';
                                    // var p = s.repeat(ma.estrellas);
                                        console.log(slf)
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
                <td>`+   s.repeat(ma.estrellas) + `</td>
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
                                     
                                  }  
                                   }

 fol.addEventListener("keyup", viene); 
/*****************************************/
  viene();
   
</script>
 
</body>
</html>