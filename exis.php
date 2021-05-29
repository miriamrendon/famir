<html>
<head>
<link rel="stylesheet" type="text/css" href="ee.css" />
</head>
<body  background="http://backgroundlabs.com/wp-content/uploads/2013/04/black-mosaic-tiles.png">
<center><h1><font color="BLUE">DETALLES DEL PRODUCTO</font></h1></center>
<?php
include("conect.php");
$link=conectarse();
$b=mysqli_query($link,"select *  from interior where id=".$_REQUEST['id']);

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

<tr> <td>Id: </td> <td align="center"><?php echo $idp; ?></td> </tr>
<tr> <td>descripción: </td> <td align="center"><?php echo $e; ?></td></tr>
<tr> <td>precio: </td> <td align="center"><?php echo $p; ?></td></tr>
</table>
<p align="center"><input type="submit" value="carrito" name="enviar"></p></div><br><br>


<input type="hidden" name="cod" value="<?php echo  $idp;?>" >
<input type="hidden" name="descripcion" value="<?php echo  $e;?>" > 
<input type="hidden" name="im" value="<?php echo  $im;?>" >
<input type="hidden" name="pre" value="<?php echo  $p;?>" >



<center><a href="cataropa.php"style="color:purple;">Catalogo</a><br>
</form>
</body>
</html>

