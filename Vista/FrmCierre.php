<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
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
       <li class="first"><a href="index.html" title="">Atras</a></li>
  </ul>
</div>
<div id="content">
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" lowsrc="../CSS/ico/Search.png" />Elegir Grado</h1>
  <div align="center">
    <?
    include_once("../Modelo/C_grado.php");
    $a=new grado();
    $consulta= $a->mostrar_grado();

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Nombre</TH>\n");
         echo ("<TH></TH>\n");
         echo ("<TH></TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombre'] . "</TD>\n");
            $codigo = $resultado['CodigoGrado'];
            $nombre =$resultado['Nombre'];
            btn($codigo,$nombre);
         }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay datos disponibles");
?>
  </div>
</div>
<? function btn($cont,$nombre){ ?>
        <form method="post" name="formu" action="FrmCierreTotal.php">
         <td><INPUT TYPE=IMAGE SRC="../CSS/ico/aceptar.png"  name="btn[]" value="M<?php echo ("$cont")?>"><td>
         <input type="hidden" name="nombre[]" value="<?php echo ("$nombre")?>"">
         <? echo("");}?>
</div>
</form>
</body>
</html>







