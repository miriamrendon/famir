<?php 
function conectarse() { 
if(!($link=mysqli_connect("localhost","root","","carrito"))) 
{ echo "error al conectar a la base de datos..!"; exit(); } 
//echo "conexion exitosa...!"; 
return $link; }
 ?> 