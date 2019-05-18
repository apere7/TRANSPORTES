<HTML>
<HEAD>
<TITLE>lectura.php</TITLE>
</HEAD>
<BODY>
<div class="ewHeaderRow"><img src="phpmkrlogo6.png" alt="" border="0"></div>
<br>
<br>
<?
//Conexion con la base
//<h1><div align="center">Consulta por Requerimientos</div></h1>
mysql_connect("localhost","root","root"); 

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("migra_de_accabase"); 

//Ejecutamos la sentencia SQL
//$result=mysql_query("SELECT * FROM servidor51_amb")
$result=mysql_query ("SELECT Requerimiento,
	Aplicacion,
	`Release`,
	FechaCertificacion,
	Status,
	InstalacionenAmbiente,
	FechaInstalado,
	CumplimientodeInstalacion,
	Descripcion
	FROM tblAgenda
	WHERE (((Requerimiento)= 16661))
	ORDER BY Requerimiento");

?>
<table align="center">
<tr>
<th>Requerimiento</th>
<th>Aplicacion</th>
<th>Release</th>
<th>FechaCertificacion</th>
<th>Status</th>
<th>InstalacionenAmbiente</th>
<th>FechaInstalado</th>
<th>CumplimientodeInstalacion</th>
<th>Descripcion</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["Requerimiento000000"].'</td>';
echo '<td>'.$row["Aplicacion"].'</td>';
echo '<td>'.$row["Release"].'</td>';
echo '<td>'.$row["FechaCertificacion"].'</td>';
echo '<td>'.$row["Status"].'</td>';
echo '<td>'.$row["InstalacionenAmbiente"].'</td>';
echo '<td>'.$row["FechaInstalado"].'</td>';
echo '<td>'.$row["CumplimientodeInstalacion"].'</td>';
echo '<td>'.$row["Descripcion"].'</td></tr>';
//echo '<td>'.$row["Observaciones"].'</td></tr>';
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