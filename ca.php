<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title>Catalogo </title>
</head>
<body>
<header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="#acerca">Acerca de</a>
            <a href="#pro">Productos</a>
            <a href="#co">Contacto</a>
        </nav>
        <section class="textos-header">
          <br><br> <br><br> <br><br><img src="img/f.png" height="50"> <h1> FAMIR</h1>
            <h2>El estilo, nunca pasa de moda</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
	<center><h1><font color="coral">--- CATALOGO DE TODOS LOS PRODUCTOS ---</font></h1></center>
	<br><center><a href="cate.php" title="Buscar productos"><img src="ima/ima.png" width="40"  ></a></center>
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
		
		

		
	</section>
	
</body>
</html>