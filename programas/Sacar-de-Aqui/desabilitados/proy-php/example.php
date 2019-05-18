<html>
<body>
<!-- LOGO --> 
<a style="CURSOR: hand"><img src=C:\AppServ\www\PHP-MYSQL\CANTV-GCC\img\TITULO5.gif border=0></a>
	<p align="center"><font size=6><font color="blue">Consulta todos los Req:</font> </font></p>
			</body>




<?php
require 'DataGrid.php';
#####################################################
#
#                                         CONECCION CON LA BASE DE DATOS 
#
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'servidores');

$dbLinkId = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Cannot create mysql connection' . mysql_error());
mysql_select_db(DB_NAME, $dbLinkId);
#####################################################

#####################################################
#
#                      Extraer la información de MySQL,  y  cargar los datos del data grid: 

#
$users = array();
$result = mysql_query("SELECT * FROM `tipificacion_remedy`", $dbLinkId);
while ($row = mysql_fetch_assoc($result))

{
    $users[] = $row;
  
}
mysql_free_result($result);
mysql_close($dbLinkId);
#####################################################
?>


<!-- ###################################################  -->
<!-- #  estilo que se utiliza en el data grid -->
<!-- #  -->
<style type="text/css">
.alterRow {background-color:#ffcc99}     				<!-- #  este es la colucna intecalada -->
body {background-color:#e9e9e9}							<!-- #  este le coloca el fondo de color deseado ccccff-->
.fdg_sortable {cursor:pointer;text-decoration:underline;color:#00c;}
</style>
<!-- ###################################################  -->


<!-- ###################################################  -->
<!--  <p>Haga click en la cabecera de la tabla para ordenar por esa columna </p>  -->
<?php
Fete_ViewControl_DataGrid::getInstance($users)
->setGridAttributes(array('cellspacing' => '1', 'cellpadding' => '5', 'border' => '1'))
->enableSorting(true)
->removeColumn('id') 
->setup(array(
  'nombre' => array('header' => 'Nombre'),
  'user_fullname' => array('header' => 'Fullname'),
  'user_email' => array('header' => 'Email', 'cellTemplate' => '[[testInlineFunction:%data%]]'),
  'user_date' => array('header' => 'Date Registered', 'cellTemplate' => '[[date:Y-m-d H-i-s,%data%]]')   
))
#####################################################
#   
#   El método addColumnAfter(),  Sirve para añadir una columna después de las columnas que formaríamos con el array. (edit y delete)
#   El método addColumnBefore
#   El método setStartingCounter
#   El método setRowClass
#   El método setAlterRowClass
#   El método render
->addColumnAfter('actions', '<a href="#edit.php?id=$user_id$">Edit</a> - <a href="#delete.php?id=$user_id$" onclick="return confirm(\'Esta seguro que desea eliminar el registro $user_fullname$?\')">Delete</a>', 'Actions', array('align' => 'center'))
//->addColumnAfter('actions', '<a href="#edit.php?id=$user_id$">Edit</a> - <a href="#delete.php?id=$user_id$" onclick="return confirm(\'Esta seguro que desea eliminar el registro $user_fullname$?\')">Delete</a>', 'Actions', array('align' => 'center'))
->addColumnBefore('counter', '%counter%.', 'Contador', array('align' => 'right'))
->setStartingCounter(1)
->setRowClass('row')
->setAlterRowClass('alterRow')
->render();
#####################################################
?>
</html>
