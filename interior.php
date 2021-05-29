<!DOCTYPE html>
<head><meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
function datos(d1){
window.location="exis.php?id="+d1;
}

</script>
</head>
<body bgcolor="#FFD6BD">
<center><h1><font color="coral">--- CATALOGO DE PRODUCTOS ---</font></h1></center>

<?php
include("conect.php");
$link=conectarse();
$sql="select * from interior";
$resolv=mysqli_query($link,$sql);
?>


<table width="630" align="center" border=1>


<tr align="center" bgcolor="crimson">
<td><h3><font color="white">--ID--</h3></font></td>
<td><h3><font color="white">Descripcion</h3></font></td>
<td><h3><font color="white">Imagen</h3></font></td>
<td><h3><font color="white">Precio</h3></font></td>
<td><h3><font color="white">Ver</h3></font></td>


</tr>



<?php
while($row=mysqli_fetch_row($resolv))
{

echo "<tr align='center' >
<td bgcolor='white'>$row[0]</td>
<td bgcolor='white'>$row[1]</td> 
<td bgcolor='white'><img src='$row[2]' width='140' height='150'></td> 
<td bgcolor='white'>$row[3]</td>  
<td bgcolor='WHITE'><img src='ima/v.png' width='50' height='50' onclick='datos($row[0])'></td> 
</tr>";


}


?>

</table>

</body>
</html>