<HTML>
<HEAD>
<TITLE>Entrada a WebMaster</TITLE>
</HEAD>
<BODY>
<H2><CENTER>Bienvenido WEBMASTER</CENTER></H2>
<H3><CENTER>Por favor escriba su nombre de usuario y su palabra de acceso</CENTER></H3>
<H4><CENTER>Nombre de usuario: </CENTER></H4>
<CENTER><INPUT TYPE = "TEXT" NAME = "id_usuario"></CENTER>
<H4><CENTER>Palabra de acceso: </CENTER></H4>
<CENTER><INPUT TYPE = "PASSWORD" NAME = "password"></CENTER>
<CENTER><INPUT TYPE = "SUBMIT" VALUE = "Entrar"></CENTER>
<?php
if($id_usuario == "" && $password == ""){
echo "";
}
elseif($id_usuario =="Alberto" && $password == "bibidi"){
echo "<CENTER><A HREF = 'resultado_estadistica.php' >Ir a Estadísticas</A></CENTER>"; 
}
else{
echo "<H1><CENTER>Usuario o Palabra de Acceso equivocado</CENTER></H1>";
}
?>
</BODY>
</HTML>
