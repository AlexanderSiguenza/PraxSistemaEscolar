<?php
   $resultado = $_POST['resultado'];
   $n        = count( $resultado);
   $i        = 0;
   $C=0;
   $Cc=0;
   $Ccc=0;

   while ($i < $n){
      $Cadena= $resultado[$i];
     echo ("........$Cadena....... \n\n\n");
      $i++;

      if ($Cadena > 10 ){
        if ($C==0){
          echo ("no puede introducir valores mayores a 10 ($Cadena > 10) \n");
         }
         $C++;
      }

      if ($Cadena=="" ){
        if ($Cc==0){
          echo ("No puede introducir valores Vacios");
         }
         $Cc++;
      }

       if ($Cadena=="." or $Cadena==".." or  $Cadena=="..." or $Cadena=="..."){
        if ($Ccc==0){
          echo ("No puede introducir solo puntos");
         }
         $Ccc++;
      }
   }
?>







