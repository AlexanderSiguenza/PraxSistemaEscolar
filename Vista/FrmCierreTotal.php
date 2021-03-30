<?php
   $btn = $_POST['btn'];
   $nombre= $_POST['nombre'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $elimina=trim($Cadena[0]);
      $codigo1=trim(ltrim($Cadena, "M"));
      $i++;
   }
    $Grado= $nombre[$codigo1-1];
    //echo ("Grado:$codigo1....$Grado");

?>
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
       <li class="first"><a href="FrmCierre.php" title="">Atras</a></li>
    </ul>
</div>
<div id="content">
<h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="64" height="64" lowsrc="../CSS/ico/Search.png" />Cerrar Secciones del : <?php echo(" $Grado");?></h1>
 <div align="center">
   <p>
     <?
    include_once("../Modelo/C_seccion.php");
    $a=new seccion();
    $consulta= $a->buscar_seccionGrado($codigo1);

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Secciones</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['Nombre'] . "</TD>\n");
            $codigo = $resultado['CodigoSeccion'];
         }
         $grado =$codigo1;
         btn($grado);
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay datos disponibles");
?>
    </p>
 </div>
</div>
<? function btn($cont){ ?>
<input type="hidden" name="seccion" value="<?php echo ("$cont")?>"">
<? echo("");}?>
<form method="post" name="formu" action="FrmCierre.php">
<p align="center">
          <input type="submit" value="Cerrar Secciones" />
</div>
</form>
</div>
</body>
</html>