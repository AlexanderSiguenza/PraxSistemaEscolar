<?php
require_once('../Config/c_conexion.php');
$conexion=Conectarse();

$usuario1=$_POST['usuario'];
$contrasena1=$_POST['password'];

$consulta= "SELECT * FROM usuario where nombreUsuario='$usuario1' and Contrasenia='$contrasena1'";
$result= mysql_query($consulta,$conexion)or die("Problemas en la instrucción select:".mysql_error());
$row = mysql_fetch_array($result);
$privilegios = $row['Privilegio']; //aqui verifico que tipo de usuario me visita

$consulta2= "SELECT * FROM administrativo where Usuario_nombreUsuario='$usuario1'";
$result2= mysql_query($consulta2,$conexion)or die("Problemas en la instrucción select:".mysql_error());
$row2 = mysql_fetch_array($result2);
$usuario2= $row2['Nombres'];
$usuario2.= ", ";
$usuario2.= $row2['Apellido1'];
$codigoD= $row2['CodigoAdministrativo'];

$count=mysql_num_rows($result);
if($count==1){
session_start();

if($privilegios == 'Administrativo') {
$_SESSION["privilegio"] = "Administrativo";
$_SESSION["usuario"] = "$usuario2";
$_SESSION["contrasena"] = "$contrasena1";
$_SESSION["codigo"] = "$codigoD";
header("Location: index.html");
}
if($privilegios == 'Alumno') {
$consulta3= "SELECT * FROM alumno where Usuario_nombreUsuario='$usuario1'";
$result3= mysql_query($consulta3,$conexion)or die("Problemas en la instrucción select:".mysql_error());
$row3 = mysql_fetch_array($result3);
$usuario3= $row3['Nombres'];
$usuario3.= ", ";
$usuario3.= $row3['Apellido1'];
$codigo= $row3['CodigoAlumno'];
$_SESSION["privilegio"] = "Alumno";
$_SESSION["usuario"] = "$usuario3";
$_SESSION["contrasena"] = "$contrasena1";
$_SESSION["codigo"] = "$codigo";
header("Location: ../Alumno/alumno.php");
}
if($privilegios == 'Docente') {
$_SESSION["privilegio"] = "Docente";
$_SESSION["usuario"] = "$usuario2";
$_SESSION["contrasena"] = "$contrasena1";
$_SESSION["codigo"] = "$codigoD";
header("Location: ../Docente/docente.php");
}
}else {
header("Location: loginError.html");
//echo "Nombre de usuario equivocado o contraseña";
}
?>