<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/f.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title>Catalogo </title>
</head>
<body>
<header>
			<img src="img/f.png" width="65" ><h1>FAMIR</h1>
		<a href="b2.php" title="ver Carrito de compras">
			<img src="ima/carro.png">
		</a>
	</header>
		<form method="GET">
<br><br><br><br>
<center><a href="cataropa.php" title="Catálogo"><img src="img/fl.png" width="40"  ></a></center><br>
<p align="center"> Producto:
<input type="text" name="txtNom">
<input type="submit" name="boton" value="BUSCAR"></p>

</form>
		<section>


	<?php
include("conect.php");
$link=conectarse();
if (isset($_GET["boton"]) && !empty($_GET["boton"])) {
$sql="SELECT * FROM productos WHERE descripcion like '%".$_GET["txtNom"]."%'";
$resolv=mysqli_query($link,$sql);
while($row=mysqli_fetch_row($resolv))
{

?>

<div class="producto">
			<center>
				<br>
				<img src="<?php echo $row[2];?>" width="150" height="150"><br>
				<span><?php echo $row[1];?></span><br>
				<?php echo " <a href='exis1.php?id=$row[0]'>ver</a>";?>
			</center>
		</div>
	<?php
		}}
	?>
</section>
 <footer>
        <a name="co" id="co"></a>
                 <h2 class="titulo-final"><img src="img/f.png" height="50"> FAMIR </h2>
                <h4>Email</h4>
                <p>famir.ropa@gmail.com</p>
       
    </footer>
	</body>
</html>	