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

//selecci�n de la base de datos con la que vamos a trabajar 
mysql_select_db("migra_de_accabase"); 

//Ejecutamos la sentencia SQL
//$result=mysql_query("SELECT * FROM servidor51_amb")
$result=mysql_query("SELECT Requerimiento,
      Descripcion,
      Aplicacion,
      `Release`,
      InstalacionenAmbiente,
      InstaladoenAmbiente,
      Observaciones
FROM tblAgenda
WHERE ((('Release') <> 'EXTRA-2008-06') 
AND ((InstaladoenAmbiente) Between 'Date()' 
AND 'Date()-6')");


?>
<table align="center">
<tr>
<th>Aplicacion</th>
<th>InstalacionenAmbiente</th>
<th>InstaladoenAmbiente</th>
<th>CumplimientodeInstalacion</th>
<th>FechaCertificacion</th>
<th>Status</th>
<th>Observaciones</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["Aplicacion"].'</td>';
echo '<td>'.$row["InstalacionenAmbiente"].'</td>';
echo '<td>'.$row["InstaladoenAmbiente"].'</td>';
echo '<td>'.$row["FechaCertificacion"].'</td>';
echo '<td>'.$row["Status"].'</td></tr>';
//echo '<td>'.$row["Observaciones"].'</td></tr>';
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