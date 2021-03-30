<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
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
       <li class="first"><a href="../Vista/FrmInstitucion2.php" title="">inicio</a></li>
        <li><a href="../Vista/FrmInstitucion2.php" title="">agregar</a></li>
        <li><a href="Coninstitucion2.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Coninstitucion.php" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
<h1 align="center">&nbsp;</h1>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" lowsrc="../CSS/ico/Search.png" />Consulta Institucion</h1>
<div align="center">
      <?
    include_once("../Modelo/C_institucion.php");
    $a=new institucion();
    $consulta= $a->mostrar_institucion();
   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         //echo ("<TH>Codigo</TH>\n");
         echo ("<TH>Nombre</TH>\n");
         echo ("<TH>Director</TH>\n");
         echo ("<TH>Telefono</TH>\n");
         echo ("<TH>Direccion</TH>\n");
         echo ("<TH>Codigo Depto</TH>\n");
         echo ("<TH>Codigo Muni</TH>\n");
         echo ("<TH>Estado</TH>\n");
         echo ("<TH>año</TH>\n");
         echo ("<TH></TH>\n");
         echo ("</TR>\n");

       for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            //echo ("<TD>" . $resultado['CodigoInstituto'] . "</TD>\n");
            echo ("<TD>" . $resultado['NombreInstituto'] . " </TD>\n");
            echo ("<TD>" . $resultado['NombreDirector'] . "</TD>\n");
            echo ("<TD>" . $resultado['Telefono'] . "</TD>\n");
            echo ("<TD>" . $resultado['Direccion'] . "</TD>\n");
            echo ("<TD>" . $resultado['Departamento_codigoDepto'] . "</TD>\n");
            echo ("<TD>" . $resultado['Municipio_codigoMunicipio'] . "</TD>\n");
            echo ("<TD>" . $resultado['Estado'] . "</TD>\n");
            echo ("<TD>" . $resultado['Anho'] . "</TD>\n");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay noticias disponibles");

?>
</div>
</div>
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">&nbsp;</h1>
  <p align="center">&nbsp;</p>
</div>
</body>
</html>