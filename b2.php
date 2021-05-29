<?php
session_start();
date_default_timezone_set('America/Mexico_City');
$fecha=date("Y-m-d");
$hora=date("H:i:s");
$desa=0;
include("conect.php");
$link=conectarse();
if(isset($_SESSION['carrito'])){
if(isset($_POST['cod'])){

$arreglo=$_SESSION['carrito'];
$encontro=false;
$numero=0;
for($i=0;$i<count($arreglo);$i++){
if($arreglo[$i]['Codigo']==$_POST['cod']){
$encontro=true;
$desa=1;
$numero=$i;
}
}
if($encontro==true){
$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
$_SESSION['carrito']=$arreglo;
}else{
$id=$_POST['cod'];
$imagen=$_POST['im'];
$precio=$_POST['pre'];
$descripcion=$_POST['descripcion'];
$desa=1;
$nuevo=array('Codigo'=>$_POST['cod'],'Imagen'=>$imagen,'Precio'=>$precio,'Cantidad'=>1,'Des'=>$descripcion
);
array_push($arreglo,$nuevo);
$_SESSION['carrito']=$arreglo;

}
}

}else{
if(isset($_POST['cod'])){
$id=$_POST['cod'];
$imagen=$_POST['im'];
$precio=$_POST['pre'];
$descripcion=$_POST['descripcion'];
$desa=1;
$arreglo[]=array('Codigo'=>$_POST['cod'],'Imagen'=>$imagen,'Precio'=>$precio,'Cantidad'=>1,'Des'=>$descripcion
);
$_SESSION['carrito']=$arreglo;
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/f.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title>Carro</title>
</head>

<body  bgcolor="lavender">
<center><h1> <font color="burgundy">Carrito De Compras</font></h1></center>
<section>
<?php
$total=0;$iva=0;$totalfinal=0;$articulos=0;
if(isset($_SESSION['carrito'])){
$datos=$_SESSION['carrito'];

for($i=0;$i<count($datos);$i++){
?>

<div class="producto">
			<center>
			<br>
			<img src="<?php echo $datos[$i]['Imagen'];?>" width="70" height="70"><br>
			Codigo: <?php echo $datos[$i]['Codigo'];?><br>
			Precio: <?php echo $datos[$i]['Precio'];?><br>
			Cantidad: <?php echo $datos[$i]['Cantidad'];?><br>
			Subtotal: <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?><br>
</center>
		</div>
<?php
$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
$iva=$total*0.16;
$totalfinal=$total+$iva;
$articulos=$datos[$i]['Cantidad']+$articulos;
}

}else{
echo '<center><h1> carrito vacio</h1></center>';
$desa=0;
}
echo '<center><h2><font color="burgundy">Total: '.$total.'</font></h2></center>';
echo '<center><h2><font color="red"> IVA: '.$iva.'</font></h2></center>';
echo '<center><h2><font color="burgundy"> TOTAL FINAL: '.$totalfinal.'</font></h2></center>';
echo '<center><h2><font color="burgundy"> Articulos: '.$articulos.'</font></h2></center>';
$xx=2;
$x33=2;
?>
<center><h3><a href="cataropa.php" > IR A CATALOGO</a></h3></center>
<form action="venta.php" method="post">
<input type="hidden" name="total" value="<?php echo  $totalfinal;?>" >
<input type="hidden" name="iva" value="<?php echo  $iva;?>" >
<input type="hidden" name="num" value="<?php echo  $articulos;?>" >
<input type="hidden" name="fec" value="<?php echo  $fecha;?>" >
<input type="hidden" name="hor" value="<?php echo  $hora;?>" >

<br><center>
	<input type="hidden" name="var" value="<?php echo  $x33;?>" >
	<?php
	if ($desa==0) {?>
		<input type="submit" value="Comprar" name="enviar" disabled="true"></center>
<?php	} else{?>
	<input type="submit" value="Comprar" name="enviar"></center>
<?php	} 	?>
</form>
<form action="elim.php" method="post">
<input type="hidden" name="vari" value="<?php echo  $xx;?>" >
<br><center><input type="submit" value="Limpiar Carrito" name="enviar"></center>
</form>
</body>
</html>