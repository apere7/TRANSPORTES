<HEAD> 
          <TITLE>Proyecto P�gina Din�mica</TITLE></HEAD>
          <!-- Formato del T�tulo de la p�gina--><FORM METHOD = "POST" ACTION = "proyecto_6.php"> 
          <CENTER>
            <font color="#1200FF" face="Verdana"><B><H2>Sistema de C�lculo de 
            Impuesto de Producto</H2></B></font>
          </CENTER>
          <BR>
          <BR>
<?php
   //Imprimiento la fecha de hoy en la pantalla
   echo "<CENTER><H3>Bienvenido(a) ".$nombre."</H3></CENTER>";
   $fecha = date("j-m-Y");
   echo "<CENTER><H2> $fecha </H2></CENTER>";
?>
	<CENTER><TABLE BORDER = 1>
            	<TH>TIPO<TH>NOMBRE<TH>CANTIDAD<TH>PRECIO FINAL <TR> <TD> 
            	<SELECT NAME = "tipo_prod">
	<?php echo "<OPTION VALUE = '$tipo_prod'></OPTION>";?> 
              	<OPTION VALUE = "disco">Disco</OPTION>
              	<OPTION VALUE = "libro">Libro</OPTION>
            	</SELECT><TD>
            	<SELECT NAME = "nombre_prod">
    <?php echo "<OPTION VALUE = '$nombre_prod'></OPTION>";?> 
              	<OPTION VALUE = "El hombre del traje gris">El hombre del traje gris 
              	- Joaqu�n Sabina</OPTION>
              	<OPTION VALUE ="Mentiras piadosas">Mentiras piadosas - Joaqu�n Sabina</OPTION>
              	<OPTION VALUE = "Cien a�os de soledad">Cien a�os de soledad - Gabriel 
              	Garc�a M�rquez</OPTION>
              	<OPTION VALUE = "El jinete polaco">El jinete polaco - Antonio Mu�oz 
              	Molina</OPTION>
            	</SELECT><TD>
    <?php echo "<INPUT TYPE = TEXT NAME = 'cantidad' VALUE = '$cantidad' MAXLENGTH = 5 SIZE = 5>"; ?> <TD> 
<?php
   /*********************************************************************************************
   * Programa que calcula el precio final de un producto, a partir de su precio original m�s un impuesto
   * Autor:
   * Fecha:
   *********************************************************************************************/
   $precio_original = 0;
   function calculo($precio_original, $cantidad){ 								//Funci�n que calcula el precio final
      return $precio_final = (($precio_original * 0.13) + $precio_original)*$cantidad;  //retorna precio final
   }
   switch($tipo_prod){
         case "disco":
            if($nombre_prod == "Cien a�os de soledad" || $nombre_prod =="El jinete polaco"){
               echo "<H1>El producto escogido es un libro, corrija</H1>";
          }
            else{
               $precio_original = 15.5;
               echo "<CENTER>".number_format(calculo($precio_original,$cantidad),2,'.',',')."</CENTER>";
            }
         break;
      case "libro":
         if($nombre_prod == "El hombre del traje gris" || $nombre_prod == "Mentiras piadosas"){
           echo "<H1>El producto escogido es un disco, corrija</H1>";
         }
         else{
           $precio_original = 20.00;
           echo "<CENTER>".number_format(calculo($precio_original,$cantidad),2,'.',',')."</CENTER>";
         }
         break;
   }
   /*La salida ser� centada como Header 2, incluyendo el precio final (calculado en la funci�n calculo()*/
?>
	</TABLE>
	</CENTER>
          <CENTER><INPUT name="Submit" TYPE = 'Submit' VALUE = 'Calcular Precio'></CENTER>
          <CENTER><A HREF = "seguridad.php">Estad�sticas</A></CENTER>
<?php
     echo "<INPUT TYPE = HIDDEN NAME = 'nombre_prod' VALUE = '$tipo_prod'>";
     echo "<INPUT TYPE = HIDDEN NAME = 'nombre_prod' VALUE = '$nombre_prod'>";
     echo "<INPUT TYPE = HIDDEN NAME = 'nombre_prod' VALUE = '$cantidad'>";
?>
</FORM>