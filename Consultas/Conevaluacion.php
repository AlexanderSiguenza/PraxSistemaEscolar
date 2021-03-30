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
        <li class="first"><a href="../Vista/FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="../Vista/FrmEvaluacion1.php" title="">agregar</a></li>
        <li><a href="ConevaluacionVer1.php" title="">Mostrar</a></li>
        <li><a href="#" title="">Modificar / eliminar</a></li>
    </ul>
</div>
<div id="content">
  <h1 align="center">&nbsp;</h1>
  <div align="center">
    <?
      $Secc=trim($_POST["seccion"]);
      $Asig=trim($_POST["asignatura"]);
      $Peri=trim($_POST["periodo"]);
      $Acti=trim($_POST["actividad"]);
    //  echo " Seccion:$Secc / Asignatura:$Asig / Periodo:$Peri / Actividad:$Acti\n";

      $Seccion= buscar_seccion($Secc);
      $Asignatura=buscar_asignatura($Asig);
      $Periodo=buscar_periodo($Peri);
      $Actividad=buscar_actividad($Acti);
      // echo("<h1> Seccion: $Seccion / $Asignatura \n  </h1>");
      //echo " Seccion: $Seccion / Asignatura: $Asignatura / Periodo: $Periodo / Actividad: $Actividad \n";

  ?>
  </div>
  <h1 align="left"><img src="../CSS/ico/Search.png" alt="" width="50" height="50" />Ingreso de Notas:<?php echo(" Seccion: $Seccion / $Asignatura ");?></h1>
  <div align="center">
    <?
    echo " Periodo: $Periodo / Actividad: $Actividad <br>";
    echo "<br>";
    include_once("../Modelo/C_alumno.php");
    $a=new alumno();
    $consulta= $a->matricula_alumno($_POST ['seccion'],$_POST ['asignatura'],$_POST ['periodo'],$_POST ['actividad']);

       $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         echo ("<TABLE>\n");
         echo ("<TR>\n");
         echo ("<TH>Codigo</TH>\n");
         echo ("<TH>Apellidos</TH>\n");
         echo ("<TH>Nombres</TH>\n");
         echo ("<TH>Nota</TH>\n");
         echo ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            echo ("<TR>\n");
            echo ("<TD>" . $resultado['CodigoAlumno'] . "</TD>\n");
            echo ("<TD>" . $resultado['Apellido1'] . " " . $resultado['Apellido2'] . "</TD>\n");
            echo ("<TD>" . $resultado['Nombres'] . "</TD>\n");
            $codigo [] = $resultado['CodigoAlumno'];
           // echo ("$codigo[$i]");
            text($codigo[$i]);
          }
         echo ("</TABLE>\n");
         echo "<ul> </ul>";
      }
      else
         echo ("No hay Alumnos matriculados para esta seccion");
?>
    <input type="submit" value="Guardar" />
  Guardar Notas</div>
  <p align="center">&nbsp;</p>
</div>
<?function text($cont){ ?>
        <form method="post" name="formulario"  onsubmit="return validacion(formulario)" action="../Control/AgregarEvaluacion.php">
         <td><input type="text"  name="resultado[]" onkeypress="return  validarnumero2(event)" maxlength="4"/></td>
         <div align="right">
           <input type="hidden" name="codigo[]" value="<?php echo ("$cont"); ?>">
           <? echo("");}?>
          <input type="hidden" name="seccion" value="<?php echo ("$Secc"); ?>">
          <input type="hidden" name="asignatura" value="<?php echo ("$Asig"); ?>">
          <input type="hidden" name="periodo" value="<?php echo ("$Peri"); ?>">
          <input type="hidden" name="actividad" value="<?php echo ("$Acti"); ?>">
         </div>
</form>
<?
 function buscar_seccion($Seccion){
       include_once('../Modelo/C_grado.php');
       $a=new grado();
       $consulta= $a->buscar_grado($Seccion);
       while($registro=mysql_fetch_array($consulta))
      {
        $Seccion =$registro["Nombre"];
        return $Seccion;
      }
     }
 function buscar_asignatura($asignatura){
        include_once('../Modelo/C_asignatura.php');
       $a=new asignatura();
       $consulta= $a->buscar_asignatura22($asignatura);
       while($registro=mysql_fetch_array($consulta))
      {
        $Asignatura= $registro["Nombre"];
        return $Asignatura;
      }
     }
function buscar_Periodo($Peri){
        include_once('../Modelo/C_periodo.php');
       $a=new periodo();
       $consulta= $a->buscar_periodo($Peri);
       while($registro=mysql_fetch_array($consulta))
      {       $Periodo= $registro["Descripcion"];
              $Periodo.=" - ";
              $Periodo .= $registro["Nombre"];
              return $Periodo;

          }
     }
function buscar_actividad($Acti){
    include_once("../Modelo/C_actividad.php");
    $a=new actividad();
    $consulta= $a->buscar_actividad($Acti);
       while($registro=mysql_fetch_array($consulta)){
              $Actividad= $registro["Descripcion"];
              $Actividad.=" - ";
              $Actividad .= $registro["Nombre"];
              return $Actividad;
            }
       }
?>
</body>
</html>


