<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
         <li class="first"><a href="FrmAlumno2.php" title="">inicio</a></li>
        <li><a href="FrmMatricula.php" title="">agregar</a></li>
        <li><a href="../Consultas/ConMatriculaSeccion.php" title="">Mostrar</a></li>
        <li><a href="#" title="">Modificar / eliminar</a></li>

    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo(formu)" action="../Control/AgregarMatricula.php">
  <p align="left"><a href="#" title=""><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="64" height="61" /></a></p>
    <p align="center"><strong>Ingresar Matricula</strong></p>
    <table width="335" border="0" align="center">
    <tr>
        <td>Alumno :</td>
        <td><select name="Alumno">
     <?
        include_once("../Modelo/C_alumno.php");
        $a=new alumno();
        $consulta= $a->buscar_alumno($_POST ['Nombre']);
      while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoAlumno"]." > ".$registro["Nombres"]." , ".$registro["Apellido1"]." ".$registro["Apellido2"]."</option>\n";
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td>Matricula :</td>
        <td><select name="seccion">
            <?
       include_once('../Modelo/C_seccion.php');
       $a=new seccion();
       $consulta= $a->buscar_seccionGrado($_POST ['Grado']);
       while($registro=mysql_fetch_array($consulta))
      {
        echo"<option value=".$registro["CodigoSeccion"]." >".$registro["Nombre"]." </option>\n";
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td>año :</td>
        <td><select name="anho">
            <?
       include_once('../Modelo/C_institucion.php');
       $a=new institucion();
       $consulta= $a->mostrar_institucion();
       while($registro=mysql_fetch_array($consulta))
      {
         if ($registro["Estado"]=="Activo"){
              echo"<option value=".$registro["Anho"]." > ".$registro["Anho"]."</option>\n";
          }
      }
    ?> 

        </select></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Agregar" />
            <input type="reset" value="Cancelar" />
        </p></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>