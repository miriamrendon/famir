<html>
<head>
	<link rel="shortcut icon" href="img/f.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="ee.css" />
<title>Detalles</title>
</head>
<body>
<header>
			<img src="img/f.png" width="65" ><h1>FAMIR</h1>
		<a href="b2.php" title="Ver Carrito de compras">
			<img src="ima/carro.png">
		</a>
	</header>
<center><a href="cataropa.php" title="Catálogo"><img src="img/fl.png" width="40"  ></a></center><br>
<center><h1><font color="crimson">DETALLES DEL PRODUCTO</font></h1></center>
<?php
include("conect.php");
$link=conectarse();
$b=mysqli_query($link,"select *  from productos where id=".$_REQUEST['id']);

$f=mysqli_fetch_array($b);
$idp=$f["id"];
$e=$f["descripcion"];
$im=$f["imagen"];
$p=$f["precio"];



?>
<div>
<form action="b2.php" method="post">
<p align="center" >
<?php
echo   "<img src='$im' width='500' height='300'>";?></p> 
<table align="center" border=0> 

<tr> <td align="center">ID:<?php echo $idp; ?></td> </tr>
<tr> <td align="center"><?php echo $e; ?></td></tr>
<tr> <td align="center">$<?php echo $p; ?></td></tr>
</table>
<p align="center"><input type="submit" value="carrito" name="enviar"></p></div><br><br>


<input type="hidden" name="cod" value="<?php echo  $idp;?>" >
<input type="hidden" name="descripcion" value="<?php echo  $e;?>" > 
<input type="hidden" name="im" value="<?php echo  $im;?>" >
<input type="hidden" name="pre" value="<?php echo  $p;?>" >



<br>
</form>
 <footer>
        <a name="co" id="co"></a>
                 <h2 class="titulo-final"><img src="img/f.png" height="50"> FAMIR </h2>
                <h4>Email</h4>
                <p>famir.ropa@gmail.com</p>
       
    </footer>
</body>
</html>

