<html>
<body bgcolor="#FFD6BD">
<center><h1><font color="coral">--- CATALOGO DE PRODUCTOS ---</font></h1></center>

<?php
include("conect.php");
$link=conectarse();
$sql="select * from productos";
$resolv=mysqli_query($link,$sql);
?>


<table width="630" align="center">


<tr align="center" bgcolor="crimson">
<td><h3><font color="white">--ID--</h3></font></td>
<td><h3><font color="white">Descripcion</h3></font></td>
<td><h3><font color="white">Imagen</h3></font></td>
<td><h3><font color="white">Precio</h3></font></td>



</tr>



<?php
while($row=mysqli_fetch_row($resolv))
{

echo "<tr align='center' >
<td bgcolor='white'>$row[0]</td>
<td bgcolor='white'>$row[1]</td> 
<td bgcolor='white'><img src='$row[2]' width='150' height='150'></td> 
<td bgcolor='white'>$row[3]</td>  

</tr>";


}


?>

</table>

</body>
</html>