<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Catalogo </title>
</head>
<body>
<header>
		<h1>Carrito De Compras</h1>
		<a href="./carritodecompras.php" title="ver Carrito de compras">
			<img src="ima/carro.png">
		</a>
	</header>
	<center><h1><font color="coral">--- CATALOGO DE PRODUCTOS DE LENCERÍA ---</font></h1></center>
	<section>


	<?php
include("conect.php");
$link=conectarse();
$sql="select * from interior";
$resolv=mysqli_query($link,$sql);
while($row=mysqli_fetch_row($resolv))
{
?>

<div class="producto">
			<center>
				<br>
				<img src="<?php echo $row[2];?>" width="150" height="150"><br>
				<span><?php echo $row[1];?></span><br>
				<?php echo " <a href='exis.php?id=$row[0]'>ver</a>";?>
			</center>
		</div>
	<?php
		}
	?>
		