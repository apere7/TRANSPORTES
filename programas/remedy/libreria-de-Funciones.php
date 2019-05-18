<?php 
//********************************************************************************************************
function conectar()
{
//Conectamos al servidor
 mysql_pconnect("localhost","root","root");
//selecciono mi base de datos en el servidor
 mysql_select_db("personal");

}

//*******************************************************************************
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
	
function vertipificacion_remedy()
{
echo'<style type="text/css">
<!--.Estilo6 {color: #FFFFFF; font-weight: bold; } -->  </style>
<table width="1200" height="96" border="1">
  <tr>
    <td bgcolor="#666633"><span class="Estilo6">ID</span></td>
    <td bgcolor="#666633"><span class="Estilo6">AREA</span></td>
    <td bgcolor="#666633"><span class="Estilo6">CASO</span></td>
    <td bgcolor="#666633"><span class="Estilo6">CATEGORIA  </span></td>
    <td bgcolor="#666633"><span class="Estilo6">TIPO</span></td>
    <td bgcolor="#666633"><span class="Estilo6">ELEMENTO</span></td>
    <td bgcolor="#666633"><span class="Estilo6">AREA RESOLUTORIA </span></td>
    <td bgcolor="#666633"><span class="Estilo6">OBSERVACION</span></td>
  </tr>
  '; 

     $consulta="select * from tipificacion_remedy";
     $resultado=mysql_query($consulta);
     $num_resultados=mysql_num_rows($resultado);
//recupera el numero de files de un resultest. Este comando es unicamente valido para sentencias como SELECT
     echo '<br>N&uacute;mero de busquedas encontradas:'.$num_resultados.'';


	
	
    for($i=0; $i<$num_resultados; $i++)
         {
       $fila=mysql_fetch_array($resultado);
//carga todo el resultaso en files devuelve un array que se corresponde a la fila recuperada o falso si no quedan mas filas.

           echo '<tr>';
           echo '<td>'.$fila['id'].'</td>';
           echo '<td>'.$fila['area'].'</td>';
           echo '<td>'.$fila['caso'].'</td>';
           echo '<td>'.$fila['categoria'].'</td>';
           echo '<td>'.$fila['tipo'].'</td>';
           echo '<td>'.$fila['elemento'].'</td>';
           echo '<td>'.$fila['area_resolutoria'].'</td>';
           echo '<td>'.$fila['descripcion'].'</td>';
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

?> 
