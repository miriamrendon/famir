<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/f.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title>Catálogo </title>
</head>
<body>
<header>
			<img src="img/f.png" width="65" ><h1>FAMIR</h1>
		<a href="b2.php" title="Ver Carrito de compras">
			<img src="ima/carro.png">
		</a>
	</header><main>
	<center><h1><font color="crimson">--- CATALOGO DE TODOS LOS PRODUCTOS ---</font></h1></center>
	<br><center><a href="cate.php" title="Buscar productos"><img src="ima/ima.png" width="40"  ></a><a href="index.html" title="Página principal"><img src="img/fl.png" width="40"  ></a></center>
	<section>

	<?php
include("conect.php");
$link=conectarse();
$sql="select * from productos";
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
		}
	?>
		
		

		
	</section></main>
	 <footer>
        <a name="co" id="co"></a>
                 <h2 class="titulo-final"><img src="img/f.png" height="50"> FAMIR </h2>
                <h4>Email</h4>
                <p>famir.ropa@gmail.com</p>
       
    </footer>
</body>
</html>