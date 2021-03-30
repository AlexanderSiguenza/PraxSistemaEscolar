<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {
    font-size: 16px;
    font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="header">
    <div id="topmenu">
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="logo">
        <h1><a href="#">PRAX</a></h1>
        <h2><a href="#">sistema de registro academico y expediente</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="../Vista/FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmNivel2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Consultanivel2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Connivel.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <div align="center">
      <?
    include_once('../Modelo/C_nivel.php');
    $a=new nivel(); 
   if ($_POST ['Nombre']==NULL){
       $logueado =2;
}else{
       $logueado=$a->agregar_nivel($_POST ['Nombre']);
}
?>

<?if ($logueado ==1){ ?>
    </p>
    <p align="left"><img src="../CSS/ico/Open-folder-accept-256.png" alt="" width="88" height="83" />
  <? echo("El Nivel se guardo con Exito....."."<br>"); }?>


<?if ($logueado ==2){?>

  <div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)"  action="../Control/AgregarNivel.php">
    <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit_No.png" alt="" width="64" height="61" /></a><strong><span class="Estilo1">................................................................................</span>Ingresar de Nuevo</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nombre :</td>
        <td><input type="text" name="Nombre"  onkeypress="return validarText(event)" maxlength="20" value="<?php echo $_POST ['Nombre']; ?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <INPUT TYPE=IMAGE SRC="../CSS/ico/aceptar.png"  value="Agregar" >
            <INPUT TYPE=IMAGE SRC="../CSS/ico/cancelar.png"  value="Cancelar" >
        </p></td>
      </tr>
    </table>
    <p><span class="Estilo2">El Campo esta vacio....</span></p>
  </form>
</div>
<?  }?>

<?if ($logueado ==3){ ?>
   <div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)"  action="../Control/AgregarNivel.php">
    <p align="left"><a href="#" title=""><img src="../CSS/ico/Edit_No.png" alt="" width="64" height="61"  /></a><strong><span class="Estilo1">...............................................................................</span></strong><span class="Estilo1">.</span><strong>Ingresar de Nuevo</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>Nombre :</td>
        <td><input type="text" name="Nombre"  onkeypress="return validarText(event)" maxlength="20" value="<?php echo $_POST ['Nombre']; ?>"/></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <INPUT TYPE=IMAGE SRC="../CSS/ico/aceptar.png"  value="Agregar" >
            <INPUT TYPE=IMAGE SRC="../CSS/ico/cancelar.png"  value="Cancelar" >
        </p></td>
      </tr>
    </table>
    <p><span class="Estilo2">Ya existe un Nivel con ese Nombre....</span></p>
    </form>
</div>
<? }?>
  </p>
  </div>
</div>
</body>
</html>