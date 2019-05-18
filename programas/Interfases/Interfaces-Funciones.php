<?php 
//********************************************************************************************************
function conectar()
{
//Conectamos al servidor
 mysql_pconnect("localhost","root","root");
//selecciono mi base de datos en el servidor
 mysql_select_db("personal");
}
//********************************************************************************************************

function ingreso()
{
//Escribo en mi base de datos
if (isset($_POST['area']))
   {
     $area=$_POST['area'];
	 $caso=$_POST['caso'];
	 $categoria=$_POST['categoria'];
	 $tipo=$_POST['tipo'];
	 $elemento=$_POST['elemento'];
	 $area_resolutoria=$_POST['area_resolutoria'];
	 $descripcion=$_POST['descripcion'];

     $cadena=("insert into tipificacion_remedy      (area,caso,categoria,tipo,elemento,area_resolutoria,descripcion) values ('".     $area."','".$caso."','".$categoria."','".$tipo."','".$elemento."','".$area_resolutoria."','".$descripcion."') ");

     mysql_query($cadena);
     echo 'Ingresaste un cliente Nuevo';
    }
}


//********************************************************************************************************
	
function verinterfases_01()
{
echo'<style type="text/css">
<!--.Estilo6 {color: #FFFFFF; font-weight: bold; } -->  </style>
<table width="1200" height="96" border="1">
  <tr>
    <td bgcolor="#666633"><span class="Estilo6">ID</span></td>
    <td bgcolor="#666633"><span class="Estilo6">INTERFAZ</span></td>
    <td bgcolor="#666633"><span class="Estilo6">APLICACION</span></td>
    <td bgcolor="#666633"><span class="Estilo6">PASS-UNIX</span></td>
    <td bgcolor="#666633"><span class="Estilo6">PASS-BD</span></td>
    <td bgcolor="#666633"><span class="Estilo6">KP01ADM</span></td>
    <td bgcolor="#666633"><span class="Estilo6">KP01INT RESOLUTORIA </span></td>
    <td bgcolor="#666633"><span class="Estilo6">KP01CAT</span></td>
	<td bgcolor="#666633"><span class="Estilo6">KP01CUS1</span></td>
	<td bgcolor="#666633"><span class="Estilo6">KP01CUS2</span></td>
	<td bgcolor="#666633"><span class="Estilo6">KP01CUS3</span></td>
	<td bgcolor="#666633"><span class="Estilo6">USUARIO_RED</span></td>
	<td bgcolor="#666633"><span class="Estilo6">FECHA_CAMBIO</span></td>
	<td bgcolor="#666633"><span class="Estilo6">servidor</span></td>
  </tr>
  '; 

     $consulta="select * from interfaces";
     $resultado=mysql_query($consulta);
     $num_resultados=mysql_num_rows($resultado);
//recupera el numero de files de un resultest. Este comando es unicamente valido para sentencias como SELECT
     echo '<br>N&uacute;mero de busquedas encontradas:'.$num_resultados.'';


	
	
    for($i=0; $i<$num_resultados; $i++)
         {
       $fila=mysql_fetch_array($resultado);
//carga todo el resultaso en files devuelve un array que se corresponde a la fila recuperada o falso si no quedan mas filas.

           echo '<tr>';
		   echo '<td>'.$fila['Id'].'</td>';
		   echo '<td>'.$fila['INTERFAZ'].'</td>';
		   echo '<td>'.$fila['APLICACION'].'</td>';
		   echo '<td>'.$fila['PASS-UNIX'].'</td>';
		   echo '<td>'.$fila['PASS-BD'].'</td>';
		   echo '<td>'.$fila['KP01ADM'].'</td>';
		   echo '<td>'.$fila['KP01INT'].'</td>';
		   echo '<td>'.$fila['KP01CAT'].'</td>';
		   echo '<td>'.$fila['KP01CUS1'].'</td>';
		   echo '<td>'.$fila['KP01CUS2'].'</td>';
		   echo '<td>'.$fila['KP01CUS3'].'</td>';
		   echo '<td>'.$fila['USUARIO_RED'].'</td>';
		   echo '<td>'.$fila['FECHA_CAMBIO'].'</td>';
		   echo '<td>'.$fila['servidor'].'</td>';
		  }
  echo '</table>';
  echo '</div>';
}

  


//********************************************************************************************************
function prueba()
{
//para probarlo  y que no grabe en base de datos solo aparecera en pantalla es asi:
//Nota hay que comentar el anterior que si graba en base de datos
$cadena=("insert into tipificacion_remedy (area,caso,categoria,tipo,elemento,area_resolutoria,descripcion) values ('".$area."','".$caso."','".$categoria."','".$tipo."','".$elemento."','".$area_resolutoria."','".$descripcion."') ");
echo $cadena;
}


//********************************************************************************************************
function regresar()
{
//Regreso al menu inicial o principal
echo'<a href="/AppServ/www/PHP-estructura_trabajo/estructura/inicio-Menu-Principal.html">Regresar</a>';
}
//********************************************************************************************************

ob_start();
include( "archivo.php" );
$variable = ob_get_clean(); 


?> 