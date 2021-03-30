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
        <li class="first"><a href="../Vista/FrmAdministrativo2.php" title="">Atras</a></li>
        <li><a href="../Vista/FrmAdministrativo2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conadministrativo2.php" title="">Mostrar</a></li>
        <li><a href="Conadministrativo" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
<h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" />Consulta Adminstrativo</h1>
  <div align="center">
    <?
    include_once("../Modelo/C_administrativo.php");
    $a=new administrativo();
    $consulta= $a->mostrar_administrativo();

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombres</TH>\n");
        // echo ("<TH>Apellidos</TH>\n");
         echo ("<TH>Cargo</TH>\n");
         echo ("<TH>usuario</TH>\n");
         echo ("<TH></TH>\n");
         echo ("<TH></TH>\n");
         echo ("<TH></TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombres'] . "" . $resultado['Apellido1'] . " " . $resultado['Apellido2'] . " " . $resultado['Apellido3'] . "</TD>\n");
            //echo ("<TD>" . $resultado['Apellido1'] . " " . $resultado['Apellido2'] . " " . $resultado['Apellido3'] . "</TD>\n");
            echo ("<TD>" . $resultado['Cargo'] . "</TD>\n");
            echo ("<TD>" . $resultado['Usuario_nombreUsuario'] . "</TD>\n");
            $codigo= $resultado['CodigoAdministrativo'];
            btn($codigo);
           // echo("$codigo");
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay noticias disponibles");

?>
  </div>
  <? function btn($cont){ ?>
        <form method="post" name="formu" action="ModAdmin.php">
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/modificar.png" name="btn[]" value="M<?php echo ("$cont")?>"><td>
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/eliminar.png" name="btn[]" value="E<?php echo ("$cont")?>"><td>
         <? echo("");}?>
  <h1 align="center">&nbsp;</h1>
  <p align="center">&nbsp;</p>
</div>
</body>
</html>