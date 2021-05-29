<?php 
session_start();
$x1=$_POST["vari"];
if($x1){
unset($_SESSION['carrito']);

}
header("Location:b2.php");
?>