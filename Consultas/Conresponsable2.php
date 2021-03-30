<?php
   $btn = $_POST['btn'];
   $nombre = $_POST['nombre'];
   $grado = $_POST['grado'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $codigo1=trim(ltrim($Cadena, "M"));
      $c=$codigo1;

      if ($modifica=="M"){
        echo ("");
     }
      $i++;
   }
    $nombre2=$nombre[$c-1];
    $grado2=$grado[$c-1];
   //echo(" $grado2  /   Seccion: $nombre2 ....$codigo1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<link href="../CSS/estilo2.css" rel="stylesheet" type="text/css" />
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
        <li class="first"><a href="../Vista/FrmAlumno2.php" title="">inicio</a></li>
        <li><a href="../Vista/FrmResponsable2" title="">agregar</a></li>
        <li><a href="Conresponsable" title="">Mostrar</a></li>
        <li><a href="../Modificacion/ConresponAlumno.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <h1 align="center">&nbsp;</h1>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Alumnos de :<?php echo(" $grado2  /   Seccion: $nombre2");?></h1>
  <div align="center">
<?
    include_once("../Modelo/C_responsable.php");
    $a=new responsable();
    $consulta= $a->mostrar_responsable($codigo1);

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombre de Responsable</TH>\n");
         echo ("<TH>telefonoCasa</TH>\n");
         echo ("<TH>telefonoTrabajo</TH>\n");
         echo ("<TH>Direccion</TH>\n");
         echo ("<TH>Parentesco</TH>\n");
         echo ("<TH>Alumno</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
             echo ("<TD>" . $resultado['Nombres'] . " " . $resultado['Apellido1'] . " " . $resultado['Apellido2'] . "</TD>\n");
            echo ("<TD>" . $resultado['telefonoCasa'] . "</TD>\n");
            echo ("<TD>" . $resultado['telefonoTrabajo'] . "</TD>\n");
            echo ("<TD>" . $resultado['Direccion'] . "</TD>\n");
            echo ("<TD>" . $resultado['Parentesco'] . "</TD>\n");
            echo ("<TD>" . $resultado['uNombre'] . " " . $resultado['uApellido1'] . " " . $resultado['uApellido2'] . "</TD>\n");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No Hay Alumnos Matriculados Aun....");

?>
<form method="post"  action="../Reportes/RespoSeccion.php" >
    <input type="hidden" name="grado" value="<?php echo ("$codigo1")?>"">
    <input type="hidden" name="nombre" value="<?php echo ("$grado2")?>"">
    <input type="hidden" name="seccion" value="<?php echo ("$nombre2")?>"">
        <td colspan="2"><p align="center">
      </p></td>
  </form>
  </div>
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">&nbsp;</h1>
  <p align="center">&nbsp;</p>
</div>
</body>
</html>