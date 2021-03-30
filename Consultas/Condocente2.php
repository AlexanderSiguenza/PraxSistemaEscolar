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
        <h1><a href="#">PRAXON</a></h1>
        <h2><a href="#">sistema de registro academico y expediente en linea</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="../Vista/FrmUsuarios.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmDocente2.php" title="">agregar</a></li>
        <li><a href="#" title="">Modificar</a></li>
        <li><a href="Condocente2.php" title="">buscar</a></li>
        <li><a href="#" title="">eliminar</a></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      <li></li>
        <li></li>
                <li></li>
        <li></li>
        <li></li>
        <li></li> 
    </ul>
</div>
<div id="content">
  <h1 align="center">&nbsp;</h1>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Consulta de Docentes</h1>
  <div align="center">
    <?
    include_once("../Modelo/C_docente.php");
    $a=new docente();
    $consulta= $a->mostrar_docente();

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombres</TH>\n");
         echo ("<TH>Apellidos</TH>\n");
         echo ("<TH>Fecha de nacimineto</TH>\n");
         echo ("<TH>Direccion</TH>\n");
         echo ("<TH>Codigo Depto</TH>\n");
         echo ("<TH>Codigo Muni</TH>\n");
         echo ("<TH>Telefono</TH>\n");
         echo ("<TH>Sexo</TH>\n");
         echo ("<TH>Dui</TH>\n");
         echo ("<TH>nivel Academico</TH>\n");
         echo ("<TH>usuario</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombres'] . "</TD>\n");
            echo ("<TD>" . $resultado['Apellido1'] . " " . $resultado['Apellido2'] . " " . $resultado['Apellido3'] . "</TD>\n");
            echo ("<TD>" . $resultado['FechaNacimiento'] . "</TD>\n");
            echo ("<TD>" . $resultado['Direccion'] . "</TD>\n");
            echo ("<TD>" . $resultado['Departamento_codigoDepto'] . "</TD>\n");
            echo ("<TD>" . $resultado['Municipio_codigoMunicipio'] . "</TD>\n");
            echo ("<TD>" . $resultado['Telefono'] . "</TD>\n");
            echo ("<TD>" . $resultado['Sexo'] . "</TD>\n");
            echo ("<TD>" . $resultado['Dui'] . "</TD>\n");
            echo ("<TD>" . $resultado['NivelAcademico'] . "</TD>\n");
            echo ("<TD>" . $resultado['Usuario_nombreUsuario'] . "</TD>\n");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay noticias disponibles");

?>
    <script type="text/javascript">
<!--
function printPage()
{
    document.getElementById('print').style.visibility = 'hidden';
    // Do print the page
    if (typeof(window.print) != 'undefined') {
        window.print();
    }
    document.getElementById('print').style.visibility = '';
}
//-->
  </script>
    <?php
  $strPrint="Imprimir";
echo '<br /><br />&nbsp;<input type="button" style="visibility: ; width: 100px; height: 25px" id="print" value="' . $strPrint . '" onclick="printPage()">' . "\n";
?>
  </div>
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">&nbsp;</h1>
  <p align="center">&nbsp;</p>
</div>
</body>
</html>