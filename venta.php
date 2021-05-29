<?php 
 
include('conect.php');
 $link=conectarse();
$sql="insert into ventas(totalVenta,ivaVenta,numProductos,Fecha,Hora) 
values ('".$_POST['total']."', 
'".$_POST['iva']."', 
'".$_POST['num']."', 
'".$_POST['fec']."', 
'".$_POST['hor']."')"; 
 mysqli_query($link,$sql);
session_start();
$x1=$_POST["var"];
if($x1){
unset($_SESSION['carrito']);

}
 header("Location:b2.php"); 
?> 