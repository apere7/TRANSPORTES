<?php
define('MYSQLSERVER', 'localhost');
define('MYSQLUSERNAME', 'root');
define('MYSQLPASSWORD', 'root');
define('MYSQLDATABASE', 'mydb');
 
 echo "me conecte";
 
function Conectar()
{
    if (!($link = mysql_connect(MYSQLSERVER,MYSQLUSERNAME,MYSQLPASSWORD)))
        { echo "Se produjo un Error en la conexión a la base de datos. ".mysql_error();
        exit();
    }
 
    if (!($db=mysql_selectdb(MYSQLDATABASE,$link))){
        echo "Se produjo un Error seleccionando la base de datos. ".mysql_error();
        exit();
    }
        return $link;
}
 
 
/*Dentro de la función Conectar(), tenemos dos funciones de PHP, mysql_connect() y mysql_selectdb() a las cuales pasamos como parámetros las constantes definidas inicialmente,

Si el valor devuelto por la función mysql_connect() es falso, la conexión no puede concretarse por lo que se muestra un mensaje advirtiendo del error y deteniendo la ejecución a partir de la línea exit()

El caracter ! es la negación de lo que existe por delante entre paréntesis

La instrucción mysql_error() se concatena al final del mensaje mostrado y devuelve el error específico detectado por PHP

De igual forma cuando evaluamos la selección de la base de datos con la función mysql_selectdb(), si esta devuelve un valor falso se advierte mediante el mensaje y se interrumpe la ejecución,

Finalmente si todo transcurre sin problemas la función  Conectar() retorna un valor verdadero desde la variable $link*/
 
 
 
?>