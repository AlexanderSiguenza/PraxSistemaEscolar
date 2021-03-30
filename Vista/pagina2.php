<?php
$car=$_REQUEST['cod'];
if ($car==1)
{
   $materias=array('Primer Grado','Segundo Grado','Tercer Grado');
}
if ($car==2)
{
  $materias=array('Cuarto Grado','Quinto Grado','Sexto Grado');
}
if ($car==3)
{
  $materias=array('Septimo Grado','Octavo Grado','Noveno Grado');
}

$xml="<?xml version=\"1.0\"?>\n";
$xml.="<materias>\n";
for($f=0;$f<count($materias);$f++)
{
  $xml.="<materia>".$materias[$f]."</materia>\n";
}
$xml.="</materias>\n";
header('Content-Type: text/xml');
echo $xml;

?>