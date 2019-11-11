console.log('funcionando');
  
 window.onload = function() {
 	 
var lol   =  fetch('../json.php').then(dat=> dat.json())
        .then(function (dat){
 
                    
                  var lol = dat;
 }); 
 }


   

   
   

 for(let m of lol){
    	console.log(m); } 
