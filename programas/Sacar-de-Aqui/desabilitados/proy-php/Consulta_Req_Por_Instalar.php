<HTML>
<HEAD>
<TITLE>lectura.php</TITLE>
</HEAD>
<BODY>
<h1><div align="center">Consulta Requerimientos por Instalar</div></h1>
<br>
<br>
<?
//Conexion con la base
mysql_connect("localhost","root","root"); 

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("migra_de_accabase"); 

//Ejecutamos la sentencia SQL
//$result=mysql_query("SELECT * FROM servidor51_amb")
$result=mysql_query ("SELECT Requerimiento,
	Aplicacion,
	`Release`,
	Ambiente,
	Status,
	InstalacionenAmbiente,
	InstaladoenAmbiente,
	CumplimientodeInstalacion,
	ResponsableFabrica
FROM tblAgenda
WHERE (((Status)='Por instalar'))
ORDER BY InstalacionenAmbiente");

?>
<table align="center">
<tr>
<th>Requerimiento</th>
<th>Aplicacion</th>
<th>Release</th>
<th>Ambiente</th>
<th>Status</th>
<th>InstalacionenAmbiente</th>
<th>InstaladoenAmbiente</th>
<th>CumplimientodeInstalacion</th>
<th>ResponsableFabrica</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["Requerimiento"].'</td>';
echo '<td>'.$row["Aplicacion"].'</td>';
echo '<td>'.$row["Release"].'</td>';
echo '<td>'.$row["Ambiente"].'</td>';
echo '<td>'.$row["Status"].'</td>';
echo '<td>'.$row["InstalacionenAmbiente"].'</td>';
echo '<td>'.$row["InstaladoenAmbiente"].'</td>';
echo '<td>'.$row["CumplimientodeInstalacion"].'</td>';
echo '<td>'.$row["ResponsableFabrica"].'</td></tr>';
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