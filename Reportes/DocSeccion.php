<?php
require_once('class.ezpdf.php');
require_once('../Config/c_conexion.php');
$conexion=Conectarse();
//portrain -> Vertical landscape -> Horizontal tamano papel : legal , letter
$pdf =& new Cezpdf("legal","landscape");
$pdf->selectFont('../fonts/courier.afm');
$pdf->addJpegFromFile("logo.jpg",850,490,100);
$pdf->ezSetCmMargins(3.5,2.5,2.5,2.5);
$pdf->addText(900,100,8,"P�gina:");
$pdf->ezStartPageNumbers(950,100,8);
//2.5,2.5,2.5,2.5    1,1,1.5,1.5

$codigo=$_POST['grado'];
$nombre=$_POST['nombre'];
$seccion=$_POST['seccion'];

$queEmp = "SELECT seccion.CodigoSeccion,seccion.Nombre As seccion,grado.Nombre As grado,
CONCAT(administrativo.Nombres,' ',administrativo.Apellido1,' ', administrativo.Apellido2) as Docente
FROM seccion,administrativo,grado
WHERE seccion.Docente_codigoDocente = administrativo.CodigoAdministrativo
and seccion.Grado_codigo = grado.CodigoGrado ORDER BY  seccion.CodigoSeccion";

$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
    $ixx = $ixx+1;
    $data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                //'num'=>'<b>Num</b>',
                'seccion'=>'<b>seccion</b>',
                'grado'=>'<b>grado</b>',
                'Docente'=>'<b>Docente Encargado</b>'
            );
$options = array(
                'shadeCol'=>array(0.9,0.9,0.9),
                //array(1.2,0.8,0.2);  array(0.9,0.9,0.9),
                'xOrientation'=>'center',
                'width'=>800,
                'fontSize'=>15,
                'showHeadings'=>1
            );
$alex="hola termodinamica";

$txttit = "<b>CENTRO ESCOLAR REPUBLICA DE VENEZUELA</b>\n";
$txttit.= "<b>Reporte Docentes Encargados de Seccion</b>\n";
//$txttit.= "Grado: $nombre  /   Seccion: $seccion\n";

$pdf->ezText($txttit, 15);
$pdf->ezTable($data,$titles,'', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>