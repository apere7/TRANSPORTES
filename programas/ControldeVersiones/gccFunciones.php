<?php 
//********************************************************************************************************
function conectar()
{
//Conectamos al servidor
 mysql_pconnect("localhost","root","root");
//selecciono mi base de datos en el servidor
 mysql_select_db("controldeversiones");
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
	
function vercontroldeversiones_01()
{
echo'<style type="text/css">
<!--.Estilo6 {color: #FFFFFF; font-weight: bold; } -->  </style>
<table width="1200" height="96" border="1">
  <tr>
    <td bgcolor="#666633"><span class="Estilo6">Id</span></td> 
	<td bgcolor="#666633"><span class="Estilo6">Requerimiento</span></td> 
	<td bgcolor="#666633"><span class="Estilo6">Descripcion</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Aplicación</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Instalacion_en_Ambiente</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Instalado_en_Ambiente</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Cumplimiento_de_Instalacion</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Observaciones</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Release</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Ambiente</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Fecha_Inicio</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Fecha_Final</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">Instalado_en_Produccion</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">FechaCertificación</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">FechaPropuesta</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">FechaElaboracion</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">FechaEvaluacion</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">FechaInstalado</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">ResponsableIntegrador</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">ResponsableGestion</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">ResponsablePruebas</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">ResponsableFabrica</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">UsuarioRed</span></td> 
	<td bgcolor="#666633"><span class="Estilo6">Status</span></td>  
	<td bgcolor="#666633"><span class="Estilo6">InstalacionAmbienteHasta</span></td>  
  </tr>
  '; 

     $consulta="select * from gccrequerimiento";
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
		   echo '<td>'.$fila['Requerimiento'].'</td>';
		   echo '<td>'.$fila['Descripcion'].'</td>';
		   echo '<td>'.$fila['Aplicación'].'</td>';
		   echo '<td>'.$fila['Instalacion_en_Ambiente'].'</td>';
		   echo '<td>'.$fila['Instalado_en_Ambiente '].'</td>';
		   echo '<td>'.$fila['Cumplimiento_de_Instalacion'].'</td>';
		   echo '<td>'.$fila['Observaciones'].'</td>';
		   echo '<td>'.$fila['Release'].'</td>';
		   echo '<td>'.$fila['Ambiente'].'</td>';
		   echo '<td>'.$fila['Fecha_Inicio'].'</td>';
		   echo '<td>'.$fila['Fecha_Final'].'</td>';
		   echo '<td>'.$fila['Instalado_en_Produccion'].'</td>';
		   echo '<td>'.$fila['FechaCertificación'].'</td>';
		   echo '<td>'.$fila['FechaPropuesta'].'</td>';
		   echo '<td>'.$fila['FechaElaboracion'].'</td>';
		   echo '<td>'.$fila['FechaEvaluacion'].'</td>';
		   echo '<td>'.$fila['FechaInstalado'].'</td>';
		   echo '<td>'.$fila['ResponsableIntegrador'].'</td>';
		   echo '<td>'.$fila['ResponsableGestion'].'</td>';
		   echo '<td>'.$fila['ResponsablePruebas'].'</td>';
		   echo '<td>'.$fila['ResponsableFabrica'].'</td>';
		   echo '<td>'.$fila['UsuarioRed'].'</td>';
		   echo '<td>'.$fila['Status'].'</td>';
		   echo '<td>'.$fila['InstalacionAmbienteHasta'].'</td>';
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