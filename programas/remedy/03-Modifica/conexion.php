<?php
define('MYSQLSERVER', 'localhost');
define('MYSQLUSERNAME', 'root');
define('MYSQLPASSWORD', 'root');
define('MYSQLDATABASE', 'mydb');
 
 echo "me conecte";
 
function Conectar()
{
    if (!($link = mysql_connect(MYSQLSERVER,MYSQLUSERNAME,MYSQLPASSWORD)))
        { echo "Se produjo un Error en la conexi�n a la base de datos. ".mysql_error();
        exit();
    }
 
    if (!($db=mysql_selectdb(MYSQLDATABASE,$link))){
        echo "Se produjo un Error seleccionando la base de datos. ".mysql_error();
        exit();
    }
        return $link;
}
 
 
/*Dentro de la funci�n Conectar(), tenemos dos funciones de PHP, mysql_connect() y mysql_selectdb() a las cuales pasamos como par�metros las constantes definidas inicialmente,

Si el valor devuelto por la funci�n mysql_connect() es falso, la conexi�n no puede concretarse por lo que se muestra un mensaje advirtiendo del error y deteniendo la ejecuci�n a partir de la l�nea exit()

El caracter ! es la negaci�n de lo que existe por delante entre par�ntesis

La instrucci�n mysql_error() se concatena al final del mensaje mostrado y devuelve el error espec�fico detectado por PHP

De igual forma cuando evaluamos la selecci�n de la base de datos con la funci�n mysql_selectdb(), si esta devuelve un valor falso se advierte mediante el mensaje y se interrumpe la ejecuci�n,

Finalmente si todo transcurre sin problemas la funci�n  Conectar() retorna un valor verdadero desde la variable $link*/
 
 
 
?>