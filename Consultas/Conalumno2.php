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
   // echo(" $grado2  /   Seccion: $nombre2.....$codigo1");
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
        <li><a href="../Vista/FrmAlumno2.php" title="">agregar</a></li>
        <li><a href="ConalumnoSeccion.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conalumno.php" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <h1 align="center">&nbsp;</h1>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Alumnos de:  <?php echo(" $grado2  /   Seccion: $nombre2");?> </h1>
  <div align="center">
    <?
    include_once("../Modelo/C_alumno.php");
    $a=new alumno();
    $consulta= $a->mostrar_alumno($codigo1);

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE align='center'>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombres</TH>\n");
         echo ("<TH>Apellidos</TH>\n");
         echo ("<TH>Fecha Naci</TH>\n");
         echo ("<TH>Direccion</TH>\n");
        // echo ("<TH>Depto</TH>\n");
        // echo ("<TH>Muni</TH>\n");
         echo ("<TH>Tel</TH>\n");
         echo ("<TH>Sexo</TH>\n");
         echo ("<TH>Discapacidad</TH>\n");
         echo ("<TH>Problemas de salud</TH>\n");
         echo ("<TH>Estado</TH>\n");
         echo ("<TH>usuario</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombres'] . "</TD>\n");
            echo ("<TD>" . $resultado['Apellido1'] . " " . $resultado['Apellido2'] . "</TD>\n");
            echo ("<TD>" . $resultado['FechaNacimiento'] . "</TD>\n");
            echo ("<TD>" . $resultado['Direccion'] . "</TD>\n");
          //  echo ("<TD>" . $resultado['Departamento_codigoDepto'] . "</TD>\n");
          //  echo ("<TD>" . $resultado['Municipio_codigoMunicipio'] . "</TD>\n");
            echo ("<TD>" . $resultado['Telefono'] . "</TD>\n");
            echo ("<TD>" . $resultado['Sexo'] . "</TD>\n");
            echo ("<TD>" . $resultado['Discapacidad'] . "</TD>\n");
            echo ("<TD>" . $resultado['ProblemasdeSalud'] . "</TD>\n");
            echo ("<TD>" . $resultado['Estado'] . "</TD>\n");
            echo ("<TD>" . $resultado['Usuario_nombreUsuario'] . "</TD>\n");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No Hay Alumnos Matriculados");
         //<h1<a href="../Reportes/index.php">Generar Reporte</a></h1>
?>
  <form method="post"  action="../Reportes/AlumnoSeccion.php" >
    <input type="hidden" name="grado" value="<?php echo ("$codigo1")?>"">
    <input type="hidden" name="nombre" value="<?php echo ("$grado2")?>"">
    <input type="hidden" name="seccion" value="<?php echo ("$nombre2")?>"">
        <td colspan="2"><p align="center">
      </p></td>
  </form>
  </div>
  </div>
</body>
</html>