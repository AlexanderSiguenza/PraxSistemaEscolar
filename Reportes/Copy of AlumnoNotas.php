<?php
require_once('class.ezpdf.php');
require_once('../Config/c_conexion.php');
$conexion=Conectarse();
//portrain -> Vertical     landscape -> Horizontal      tamano papel : legal , letter
$pdf =& new Cezpdf("legal","landscape");
$pdf->selectFont('../fonts/Courier-Bold.afm');
$pdf->addJpegFromFile("logo.jpg",850,490,100);
$pdf->ezSetCmMargins(3.5,2.5,2.5,2.5);
$pdf->addText(900,100,8,"Página:");
$pdf->ezStartPageNumbers(950,100,8);
//2.5,2.5,2.5,2.5    1,1,1.5,1.5

$Fecha=getdate();
  $Anio=$Fecha["year"];
  $Mes=$Fecha["mon"];
  $Dia=$Fecha["mday"];
  $Hora=$Fecha["hours"].":".$Fecha["minutes"].":".$Fecha["seconds"];
  $fecha = strftime("%d - %m - %Y", time());

$grado2=$_POST['grado'];
$seccion2=$_POST['seccion'];

 $btn = $_POST['btn'];
   $n        = count($btn);
   $i        = 0;

   while ($i < $n){
      $Cadena=$btn[$i];
      $modifica=trim($Cadena[0]);
      $codigo1=trim(ltrim($Cadena, "M"));
      $c=$codigo1;

      if ($modifica=="M"){
        echo ("");
     }
      $i++;
   }

$consulta="SELECT CONCAT( Nombres,' ',Apellido1 ,' ', Apellido2) as Nombre FROM alumno
WHERE alumno.CodigoAlumno='$codigo1'";
$result= mysql_query($consulta,$conexion)or die("Problemas en la instrucción select:".mysql_error());
$row = mysql_fetch_array($result);
$nombre=$row['Nombre'];

$queEmp = "SELECT asignatura.Nombre AS Asignatura,

trimestre1.A1 As A1, trimestre1.A2 As A2, trimestre1.ET As ET,
(trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) AS Suma,
ROUND( (( trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) /3 ), 2 ) AS Pro1,

trimestre2.A1 As A11, trimestre2.A2 As A22, trimestre2.ET As ETT,
(trimestre2.A1 + trimestre2.A2 + trimestre2.ET) AS Suma,
ROUND( (( trimestre2.A1 + trimestre2.A2 + trimestre2.ET ) /3 ), 2) AS Pro2,

trimestre3.A1 As A111, trimestre3.A2 As A222, trimestre3.ET As ETTT,
(trimestre3.A1 + trimestre3.A2 + trimestre3.ET  ) AS Suma,
ROUND( ((trimestre3.A1 + trimestre3.A2 + trimestre3.ET  ) /3 ), 2  ) AS Pro3,

ROUND( ( (  (( trimestre1.A1 + trimestre1.A2 + trimestre1.ET ) /3 ) + (( trimestre2.A1 + trimestre2.A2 + trimestre2.ET ) /3 ) + ((trimestre3.A1 + trimestre3.A2 + trimestre3.ET ) /3)  )/3 ),2) AS Pro_Final

FROM alumno, trimestre1, trimestre2, trimestre3, asignatura
WHERE trimestre1.Alumno_codigoAlumno='$codigo1'
AND trimestre2.Alumno_codigoAlumno='$codigo1'
AND trimestre3.Alumno_codigoAlumno='$codigo1'
AND trimestre1.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre2.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
AND trimestre3.Asignatura_codigoAsignatura = asignatura.CodigoAsignatura
GROUP BY asignatura.Nombre
ORDER BY asignatura.Nombre";
//alumno.CodigoAlumno = trimestre1.Alumno_codigoAlumno

$resEmp = mysql_query($queEmp,$conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
    $ixx = $ixx+1;
    $data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                'Asignatura'=>'<b>Asignatura</b>',
                'A1'=>'<b>A1</b>',
                'A2'=>'<b>A2</b>',
                'ET'=>'<b>ET</b>',
                'Pro1'=>'<b>Pro TI</b>',
                'A11'=>'<b>A1</b>',
                'A22'=>'<b>A2</b>',
                'ETT'=>'<b>ET</b>',
                'Pro2'=>'<b>Pro TII</b>',
                'A111'=>'<b>A1</b>',
                'A222'=>'<b>A2</b>',
                'ETTT'=>'<b>ET</b>',
                'Pro3'=>'<b>Pro TIII</b>',
                'Pro_Final'=>'<b>Pro Final</b>'
            );
$options = array(
                'shadeCol'=>array(0.9,0.9,0.9),
                //array(1.2,0.8,0.2);  array(0.9,0.9,0.9),
                'xOrientation'=>'center',
                'width'=>800,
                'fontSize'=>15,
                'showHeadings'=>1
            );

$txttit1 = "<b>CENTRO ESCOLAR REPUBLICA DE VENEZUELA</b>\n";
$txttit= "<b>Reporte de Notas</b>\n\n";
$txttit.= "Nombre: $nombre    Grado: $grado2    Seccion: $seccion2    Año:$Anio\n\n";

$pdf->ezText($txttit1, 20, array('justification'=>'center'));
$pdf->ezText($txttit, 15);
$pdf->ezTable($data,$titles,'', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
mysql_close($conexion);
?>





