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
        <li class="first"><a href="../Vista/FrmNiveEsco.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmPlanestudios2.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conplanestudio2.php" title="">Mostrar</a></li>
        <li><a href="Conplanestudios.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
<h1 align="center">&nbsp;</h1>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" lowsrc="../CSS/ico/Search.png" />Consulta Plan de Estudios</h1>
  <div align="center">
    <?
    include_once("../Modelo/C_planestudios.php");
    $a=new planestudios();
    $consulta= $a->mostrar_planestudios();

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombre</TH>\n");
         echo ("<TH>Año</TH>\n");
         echo ("<TH>Grado</TH>\n");
         echo ("<TH></TH>\n");
         echo ("<TH></TH>\n");
         echo ("<TH></TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombre'] . "</TD>\n");
            echo ("<TD>" . $resultado['ano'] . "</TD>\n");
            echo ("<TD>" . $resultado['uNombre'] . "</TD>\n");
            $codigo = $resultado['CodigoPlan'];
            btn($codigo);
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay Datos disponibles");

?>
  </div>
  <? function btn($cont){ ?>
        <form method="post" name="formu" action="Modplanestudios.php">
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/modificar.png" name="btn[]" value="M<?php echo ("$cont")?>"><td>
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/eliminar.png" name="btn[]" value="E<?php echo ("$cont")?>"><td>
         <? echo("");}?>
</div>
</body>
</html>