<?php   
try{
  $cnc = new PDO('mysql:host=localhost; dbname=newtest', 'realredy','elapache');
//   echo 'aparcao';
  }
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    ?>