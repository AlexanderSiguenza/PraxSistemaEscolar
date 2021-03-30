<?php
require_once('class.ezpdf.php');
require_once('../Config/c_conexion.php');
$conexion=Conectarse();
//portrain -> Vertical landscape -> Horizontal tamano papel : legal , letter
$pdf =& new Cezpdf("legal","landscape");
$pdf->selectFont('../fonts/courier.afm');
$pdf->addJpegFromFile("logo.jpg",850,490,100);
$pdf->ezSetCmMargins(3.5,2.5,2.5,2.5);
$pdf->addText(900,100,8,"Página:");
$pdf->ezStartPageNumbers(950,100,8);
//2.5,2.5,2.5,2.5    1,1,1.5,1.5

$codigo=$_POST['grado'];
$nombre=$_POST['nombre'];
$seccion=$_POST['seccion'];

$queEmp = "SELECT   CONCAT(responsablealumno.Nombres,' ',responsablealumno.Apellido1 ,' ', responsablealumno.Apellido2) as Nombres,
                    CONCAT(alumno.Nombres,' ',alumno.Apellido1,' ',alumno.Apellido2) as Nombre,
                    responsablealumno.Parentesco As Parentesco
                    FROM responsablealumno, alumno, matricula
                    WHERE matricula.Seccion_codigoSeccion = '$codigo'
                    AND responsablealumno.CodigoRespon = alumno.CodigoResponsable
                    AND alumno.CodigoAlumno = matricula.Alumno_codigoAlumno";

$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
    $ixx = $ixx+1;
    $data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                'num'=>'<b>Num</b>',
                'Nombres'=>'<b>Nombres Responsable</b>',
                'Parentesco'=>'<b>Parentesco</b>',
                'Nombre'=>'<b>Nombres Alumnos</b>'
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
$txttit.= "<b>Reporte de Alumnos</b>\n";
$txttit.= "Grado: $nombre  /   Seccion: $seccion\n";

$pdf->ezText($txttit, 15);
$pdf->ezTable($data,$titles,'', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>