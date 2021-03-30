<?php
$car=$_REQUEST['cod'];
if ($car==1)
{
   $materias=array('1A','1B','1C');
}
if ($car==2)
{
  $materias=array('2A','2B','2C');
}
if ($car==3)
{
   $materias=array('3A','3B','3C');
}
if ($car==4)
{
   $materias=array('4A','4B','4C');
}
if ($car==5)
{
   $materias=array('5A','5B','5C');
}
if ($car==6)
{
   $materias=array('6A','6B','6C');
}
if ($car==7)
{
   $materias=array('7A','7B','7C');
}
if ($car==8)
{
   $materias=array('8A','8B','8C');
}
if ($car==9)
{
   $materias=array('9A','9B','9C');
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