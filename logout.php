<?php 	
$ms = $_GET['msg'];

if(!isset($_SESSION)){
	session_start(); 
session_destroy();
header('location:index.php');
}

// if(isset($_SESSION['user']) && $_SESSION['user'] == $ms){
//    session_destroy();
//    header('location:index.php');
// } else {
// 	echo $ms;

// }


 ?>