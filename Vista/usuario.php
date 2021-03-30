<?php
// Conectar a la base de datos
require_once('../Config/c_conexion.php');
$link=Conectarse();

if ($_POST['usuario']) {
//Comprobacion del envio del nombre de usuario y password
$username=$_POST['usuario'];
$password=$_POST['password'];

// Hay campos en blanco
if ($password==NULL) {
$logueado =1;
//echo "<center>El password no fue enviado<center>";

}else{
$query = mysql_query("SELECT * FROM usuario WHERE nombreUsuario = '$username'") or die(mysql_error());
$data = mysql_fetch_array($query);

if($data['Contrasenia'] != $password) {
$logueado =2;
//echo "<center>Login incorrecto<center>";

}else{
$query = mysql_query("SELECT * FROM usuario WHERE nombreUsuario = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$_SESSION["s_username"] = $row['nombreUsuario'];

$privilegios = $row['Privilegio']; //aqui verifico que tipo de usuario me visita
if($privilegios == 'administrador') {
header("Location: index.html");
}else{
header("Location: login.html");
}
}
}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>T.P.I Proyecto Final</title>
<link rel="stylesheet" href="style.css"/>
<style type="text/css">
<!--
.Estilo10 {
    font-size: 36px;
    color: #FFFFFF;
}
.Estilo13 {
    color: #FFFFFF;
    font-size: 30px;
}
.Estilo17 {font-size: 40px}
.Estilo18 {
    font-size: 20px;
    color: #FFFF00;
}
.Estilo23 {font-size: 16px; }
.Estilo27 {
    font-size: 16px
}
-->
</style>
</head>
<body>
<div id="background">
    <!-- Close navwrap -->
  </div>
  <!-- Start of index.php, page.php, single.php and archive.php page code -->
  <div id="outerWrapper">
    <!-- Sets page width to 960px and centers -->
    <div id="contentWrapper">
      <!-- Wraps content and sidebars -->
      <div id="Content">
        <div class="box">
          <h2 class="posttitle"><img src="../CSS/ico/usuario.png" width="139" height="137" /> Login </h2>
          <p align="center" class="Estilo23"><img src="../CSS/ico/login.png" width="115" height="113" /></p>
          <table width="300" border="0" align="center">
          <tr>
             <td colspan="2" align="center"
             <?if ($logueado ==1){?>
               bgcolor=#cccccc>El password no fue enviado
                <?}?>

              <?if ($logueado ==2){?>
                bgcolor=#cccccc>Login incorrecto
              <?}?>
              </td>
              </tr>
           </table>

          <form id="form1" name="form1" method="post" action="usuario.php">
            <table width="50" border="0" align="center">

            <tr>
             <td colspan="2" align="center"

             <?if ($_GET["errorusuario"]=="si"){?>

              bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span>

              <?}else{?>
              bgcolor=#cccccc>Introduce  Usuario  y  Contraseña
              <?}?>
              </td>
              </tr>

              <tr>
                <th scope="col"> <strong>Usuario:</strong></th>
                <th scope="col"><div align="center">
                  <input type="text" name="usuario" id="textfield" />
                </div></th>
              </tr>
              <tr>
                <td><strong>Contraseña:</strong></td>
                <td><div align="center">
                  <input type= "password" name="password" id="textfield2" />
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><div align="center">
                  <input type="submit" name="button" id="button" value="Enviar" />
                </div></td>
              </tr>
            </table>
          </form>
          <p align="left" class="Estilo23">&nbsp;</p>
        </div>
        <span class="Estilo27">
        <!-- Close content -->
      </span></div>
      <!-- Begin sidebar -->
      <!-- Close contentWrapper -->
    </div>
    <!-- Close outerWrapper -->
  </div>
</div>
</body>
</html>