<?PHP include("admin.php");
$usuario=$_SESSION["usuario"];
$contrasena=$_SESSION["contrasena"];
$codigo=$_SESSION["codigo"];
//$_SESSION = array();

require_once('../Config/c_conexion.php');
$conexion=Conectarse();
include("admin.php");
$usuario=$_SESSION["usuario"];
$contrasena=$_SESSION["contrasena"];
$codigo=$_SESSION["codigo"];

//Alumnos
$consulta="SELECT CONCAT( Nombres,' ',Apellido1 ,' ', Apellido2) as Nombre FROM alumno
WHERE alumno.CodigoAlumno='$codigo'";
$result= mysql_query($consulta,$conexion)or die("Problemas en la instrucción select:".mysql_error());
$row = mysql_fetch_array($result);
$nombre=$row['Nombre'];

//Matricula
$consulta= "SELECT seccion.CodigoSeccion,seccion.Nombre,grado.Nombre As usNombre FROM seccion,grado,matricula WHERE matricula.Alumno_codigoAlumno='$codigo'";
$result= mysql_query($consulta,$conexion)or die("Problemas en la instrucción select:".mysql_error());
$row1 = mysql_fetch_array($result);
$seccion=$row1['Nombre'];
$grado=$row1['usNombre'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<script language='javascript' type='text/javascript'>
function opcion(){
location.href='Vistas/FromAlumno.php';
}
function volvermenu(){
location.href='../index.html';
}
</script>
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
       <li class="first"><a href="alumno.php" title="">inicio</a></li>
       <li><a href="ConNotas.php" title="">Ver Notas</a></li>
       <li><a href="../index.php" title="">Salir</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)"  action="FrmMatricula21.php">
  <?PHP echo("<h1>$nombre  /  $grado  /  Seccion: $seccion</h1>");  ?>
   <h1 align="center">&nbsp;</h1>
   <h1 align="center">&nbsp;</h1>
   <h1 align="center">Bienvenido Alumno </h1>
   <h1 align="center">En esta seccion podra consultar sus Notas</h1>
  </form>
</div>
</body>
</html>