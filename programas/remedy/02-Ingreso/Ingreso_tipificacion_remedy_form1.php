<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label>Area	</label>
  <input name="area" type="text" id="area" />
  <p>
    <label>Caso
    <input name="caso" type="text" id="caso" />
    </label>
  </p>
  <p>
    <label>Categoria
    <input name="categoria" type="text" id="categoria" />
    </label>
  </p>
  <p>
    <label>Tipo
    <input name="tipo" type="text" id="tipo" />
    </label>
  </p>
  <p>
    <label>Elemento
    <input name="elemento" type="text" id="elemento" />
    </label>
  </p>
  <p>
    <label>Area_Resolutoria
    <input name="area_resolutoria" type="text" id="area_resolutoria" />
    </label>
  </p>
  <p>
    <label>Descripcion
    <input name="descripcion" type="text" id="descripcion" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Aceptar" />
    </label>
</p>
</form>
<?php include ('libreria-de-Funciones.php');
     $a=conectar();
	 $a=ingreso();
?>


</body>
</html>