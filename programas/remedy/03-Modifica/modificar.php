Archivo: modificar.php
 
<?php
 
// Realizamos la conexi�n al servidor MySQL
require("./conexion.php");
$link=Conectar();
 
// La variable submit es recibida desde el formulario de modificaci�n de datos
// Comprobamos si este archivo es llamado desde el formulario se ejecuta la
// consulta UPDATE, si no, se presenta el formulario para editar la informaci�n
 
if(isset($_POST["submit"])){
 
    $query = "UPDATE usuarios SET Nombre='".$_POST["Nombre"]."', Apellido='".$_POST["Apellido"]."', ".
        "Cedula='".$_POST["Cedula"]."', Email='".$_POST["Email"]."', ".
        "Telefono='".$_POST["Telefono"]."' WHERE Cedula='".$_POST["Cedula"]."'";
    $result=mysql_query($query,$link) or die("Error: ".mysql_error());
    echo "Se han modificado los datos del usuario con c�dula ".$Cedula;
 
}else{
 
    // Recibimos la variable Cedula pasada mediante el metodo GET
    // y depositamos el valor de esta en la variable llamada $Cedula
 
    $Cedula=$_GET['Cedula'];
    $query="SELECT * FROM usuarios WHERE Cedula='".$Cedula."'";
    $result=mysql_query($query,$link) or die("Error: ".mysql_error());
 
    // Verificamos con la consulta SELECT si existe un registro asociado al n�mero
    // recibido presentamos el formulario de edici�n, sino avisamos que
    // la operaci�n no puede efectuarse
 
    if(mysql_num_rows($result) > 0){
 
    while($Rs=mysql_fetch_array($result)) {
 
    ?>
 
    <form  method=Post name=frm action="./modificar.php">
        <table>
        <tr>
        <td colspan=2>
        Formulario de Modificaci�n</td>
        </tr>
      <tr>
        <td> Nombre</td>
        <td><input name='Nombre'  type='text' maxlength='20' value="<?php echo $Rs['Nombre']; ?>"></td>
        </tr>
      <tr>
        <td> Apellido</td>
        <td><input name='Apellido'  type='text' maxlength='20' value="<?php echo $Rs['Apellido']; ?>"></td>
        </tr>
      <tr>
        <td> C�dula</td>
        <td><input name='Cedula'  type='text' maxlength='20' value="<?php echo $Rs['Cedula']; ?>" readonly='true'></td>
        </tr>
      <tr>
        <td> Email</td>
        <td><input name='Email'  type='text' maxlength='20' value="<?php echo $Rs['Email']; ?>"></td>
        </tr>
      <tr>
        <td> Tel�fono</td>
        <td><input name='Telefono'  type='text' maxlength='20' value="<?php echo $Rs['Telefono']; ?>"></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name='submit' type='submit' value='Enviar'></td>
      </tr>
    </table>
    </form>
 
    <?php
    }
 
    }else{
        echo "No fu� posible realizar la operaci�n solicitada al usuario con c�dula ".$Cedula;
    }
}
// Cerramos la conexi�n
mysql_close($link);
 
?>