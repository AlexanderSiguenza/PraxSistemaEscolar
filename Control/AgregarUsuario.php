<html>

<head>
<title>Sistema Praxon</title>

<script language='javascript' type='text/javascript'>
function volver(){
location.href='FromUsuario.php';
}
function volvermenu(){
location.href='Menuprincipal.php';
}
</script>

</head>
<?
    include_once("C_usuario.php");
    $a=new usuario();
    $a->agregar_usuario($_POST['CodigoUsuario'],$_POST ['nombreUsuario'],$_POST ['Contrasenia'],$_POST ['Privilegio']);

   echo("El material se guardó con éxito..."."<br>");
   echo("<input type='button' name='retorno' value='Agregar otro...' onClick='javascript:volver();'>");
   echo("<input type='button' name='retorno' value='Menu' onClick='javascript:volvermenu();'>");
?>
</body>

</html>