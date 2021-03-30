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
        <h1><a href="#">PRAXON</a></h1>
        <h2><a href="#">sistema de registro academico y expediente en linea</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="../Vista/index.html" title="">inicio</a></li>
        <li><a href="#" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="#" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>
    </ul>
</div>
<div id="content">
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Consulta Carga Academica</h1>
  <div align="center">
    <?
    include_once("../Modelo/C_carga.php");
    $a=new carga();
    $consulta= $a->mostrar_carga();

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Docente</TH>\n");
         echo ("<TH>Asignatura</TH>\n");
         echo ("<TH>Programa de Estudio</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Docente_codigoDocente'] . "</TD>\n");
            echo ("<TD>" . $resultado['Asignatura_codigoAsignatura'] . "</TD>\n");
            echo ("<TD>" . $resultado['Planestudio_codigoPlan'] . "</TD>\n");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay noticias disponibles");
?>

  </div>
  <h1 align="center">&nbsp;</h1>
  <p align="center">&nbsp;</p>
</div>
</body>
</html>