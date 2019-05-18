Archivo: listupdate.php
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  </head>
  <body>

<?php
require("./conexion.php");
$link=Conectar();

//<?php include ('libreria-de-Funciones.php');
//     $a=conectar();
 
$query="SELECT * FROM usuarios ORDER BY Fecha ASC";
 
$result=mysql_query($query,$link) or die("Error: ".mysql_error());
 
// Si no se encuentran registros en la tabla usuarios solo resta mostrar
// el mensaje correspondiente, si se encuentra uno o más registros se recorre
// la tabla con la posibilidad de recoger los diferentes campos mediante la variable $Rs
 
if(mysql_num_rows($result) > 0){
 
// El encabezado de la tabla
?>
<table border=1>
  <tbody>
    <tr>
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Cédula</td>
      <td>Email</td>
      <td>Teléfono</td>
      <td>Fecha</td>
      <td>&nbsp;</td>
    </tr>
 
<?php     
 
  while($Rs=mysql_fetch_array($result)) {
 
echo "<tr>".
      "<td>".$Rs["Nombre"]."</td>".
      "<td>".$Rs["Apellido"]."</td>".
      "<td>".$Rs["Cedula"]."</td>".
      "<td>".$Rs["Email"]."</td>".
      "<td>".$Rs["Telefono"]."</td>".
      "<td>".$Rs["Fecha"]."</td>".
      // Establecemos un hipervínculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el número de cédula en su
      // dirección a través de la variable Cedula
      "<td><a href=./modificar.php?Cedula=".$Rs["Cedula"].">Modificar</a></td>".
    "</tr>";
 
}
 
}else{
 
echo "No hay usuarios registrados para listar";
 
}
// Cerramos la conexión
mysql_close($link);
 
?>
 
</table>
</form>
</body>
</html>