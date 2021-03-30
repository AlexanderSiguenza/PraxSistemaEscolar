<?php
function Conectarse()
{
   if (!($conexion=mysql_connect("localhost","root","contrasenia")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("praxon",$conexion))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $conexion;
}
?>