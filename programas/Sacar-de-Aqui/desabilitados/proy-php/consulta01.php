<HTML>
<HEAD>
<TITLE>lectura.php</TITLE>
</HEAD>
<BODY>
<h1><div align="center">Lectura de la tabla</div></h1>
<br>
<br>
<?
//Conexion con la base
mysql_connect("localhost","root","root"); 

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("ambiente_51"); 

//Ejecutamos la sentencia SQL
$result=mysql_query("SELECT * FROM servidor51_amb")
?>
<table align="center">
<tr>
<th>Id</th>
<th>Permisologia</th>
<th>Cantidad</th>
<th>Usuario</th>
<th>Grupo</th>
<th>Registros</th>
<th>Mes</th>
<th>Dia</th>
<th>Ano_O_Hora</th>
<th>Nombre</th>
<th>Fecha</th>
<th>Aplicacion</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["Id"].'</td>';
echo '<td>'.$row["Permisologia"].'</td>';
echo '<td>'.$row["Cantidad"].'</td>';
echo '<td>'.$row["Usuario"].'</td>';
echo '<td>'.$row["Grupo"].'</td>';
echo '<td>'.$row["Registros"].'</td>';
echo '<td>'.$row["Mes"].'</td>';
echo '<td>'.$row["Dia"].'</td>';
echo '<td>'.$row["Ano_O_HoraId"].'</td>';
echo '<td>'.$row["Nombre"].'</td>';
echo '<td>'.$row["Fecha"].'</td>';
echo '<td>'.$row["Aplicacion"].'</td></tr>';
}
mysql_free_result($result)
?>
</table>

<div align="center">
<a href="insertar.html">Añadir un nuevo registro</a><br>
<a href="actualizar1.php">Actualizar un registro existente</a><br>
<a href="borrar1.php">Borrar un registro</a><br>
</div>

</BODY>
</HTML>