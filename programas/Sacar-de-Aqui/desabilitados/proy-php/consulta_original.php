<HTML>
<HEAD>
<TITLE>lectura.php</TITLE>
</HEAD>
<BODY>
<h1><div align="center"> Lectura de la tabla</div></h1>
<br>
<br>
<?
//Conexion con la base
mysql_connect("localhost","root","root"); 

//selecci�n la base de datos con la que vamos a trabajar 
mysql_select_db("mi_base_datos"); 

//Ejecutamos la sentencia SQL
$result=mysql_query("select * from clientes");
?>
<table align="center">
<tr>
<th>Nombre</th>
<th>Tel�fono</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["nombre"].'</td>';
echo '<td>'.$row["telefono"].'</td></tr>';
}
mysql_free_result($result)
?>
</table>

<div align="center">
<a href="insertar.html">A�adir un nuevo registro</a><br>
<a href="actualizar1.php">Actualizar un registro existente</a><br>
<a href="borrar1.php">Borrar un registro</a><br>
</div>

</BODY>
</HTML> 