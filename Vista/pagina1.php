<?php
$car=$_REQUEST['cod'];
if ($car==1)
{
   $materias=array('Santa Ana','Texistepeque','Chalchuapa','Coatepeque','El Congo','El Porvenir','Metapan','Masahuat','San Antonio Pajonal','San Sebastian','Santa Rosa Guachipil','Candelaria de la Frontera','Santiago de la Frontera');
}
if ($car==2)
{
  $materias=array('Jujutla','Atiquizaya','Concepci�n de Ataco','El Refugio','Guaymango','Apaneca','San Francisco Men�ndez','San Lorenzo','San Pedro Puxtla','Tacuba,Tur�n');
}
if ($car==3)
{
  $materias=array('Acajutla','Armenia','Caluco','Cuisnahuat','Izalco','Juay�a','Nahuizalco','Nahulingo','Salcoatit�n','San Antonio del Monte','San Juli�n','Santa Catarina Masahuat','Santa Isabel Ishuat�n','Santo Domingo','Sonsonate','Sonzacate');
}
if ($car==4)
{
  $materias=array('Antiguo Cuscatl�n','Chiltiup�n','Ciudad Arce','Col�n','Comasagua','Huiz�car','Jayaque','Jicalapa','La Libertad','Santa Tecla','Nuevo Cuscatl�n','San Juan Opico','Quezaltepeque','Sacacoyo','San Jos� Villanueva','San Mat�as','San Pablo Tacachico','Talnique','Tamanique','Teotepeque','Tepecoyo','Zaragoza');
}
if ($car==5)
{
  $materias=array('Aguilares','Apopa','Ayutuxtepeque','Cuscatancingo','Delgado','El Paisnal','Guazapa','Ilopango','Mejicanos','Nejapa','Panchimalco','Rosario de Mora','San Marcos','San Mart�n','San Salvador','Santiago Texacuangos','Santo Tom�s','Soyapango','Tonacatepeque');
}
if ($car==6)
{
  $materias=array('Candelaria','Cojutepeque','El Carmen','El Rosario','Monte San Juan','Oratorio de Concepci�n','San Bartolom� Perulap�a','San Crist�bal','San Jos� Guayabal','San Pedro Perulap�n','San Rafael Cedros','San Ram�n','Santa Cruz Analquito','Santa Cruz Michapa','Suchitoto','Tenancingo');
}
if ($car==7)
{
  $materias=array('Agua Caliente','Arcatao','Azacualpa','Chalatenango','Cital�','Comalapa','Concepci�n Quezaltepeque','Dulce Nombre de Mar�a','El Carrizal','El Para�so','La Laguna','La Palma','La Reina','Las Vueltas','Nueva Concepci�n','Nueva Trinidad','Nombre de Jes�s','Ojos de Agua','Potonico','San Antonio de la Cruz','San Antonio Los Ranchos','San Fernando','San Francisco Lempa','San Francisco Moraz�n','San Ignacio','San Isidro Labrador','San Jos� Cancasque','San Jos� Las Flores','San Luis del Carmen','San Miguel de Mercedes','San Rafael','Santa Rita','Tejutla');
}
if ($car==8)
{
  $materias=array('Cuyultit�n','El Rosario','Jerusal�n','Mercedes La Ceiba','Olocuilta','Para�so de Osorio','San Antonio Masahuat','San Emigdio','San Francisco Chinameca','San Juan Nonualco','San Juan Talpa','San Juan Tepezontes','San Luis Talpa','San Luis La Herradura','San Miguel Tepezontes','San Pedro Masahuat','San Pedro Nonualco','San Rafael Obrajuelo','Santa Mar�a Ostuma','Santiago Nonualco','Tapalhuaca','Zacatecoluca');
}
if ($car==9)
{
  $materias=array('Cinquera','Dolores','Guacotecti','Ilobasco','Jutiapa','San Isidro','Sensutepeque','Tejutepeque','Victoria');
}
if ($car==10)
{
  $materias=array('Apastepeque','Guadalupe','San Cayetano Istepeque','San Esteban Catarina','San Ildefonso','San Lorenzo','San Sebasti�n','San Vicente','Santa Clara','Santo Domingo','Tecoluca','Tepetit�n','Verapaz');
}
if ($car==11)
{
  $materias=array('Alegr�a','Berl�n','California','Concepci�n Batres','El Triunfo','Ereguayqu�n','Estanzuelas','Jiquilisco','Jucuapa','Jucuar�n','Mercedes Uma�a','Nueva Granada','Ozatl�n','Puerto El Triunfo','San Agust�n','San Buenaventura','San Diosinisio','San Francisco Javier','Santa Elena','Santa Mar�a','Santiago de Mar�a','Tecap�n','Usulut�n');
}
if ($car==12)
{
  $materias=array('Carolina','Chapeltique','Chinameca','Ciudad Barrios','Comacar�n','El Tr�nsito','Lolotique','Moncagua','Nueva Guadalupe','Nuevo Ed�n de San Juan','Quelepa','San Antonio del Mosco','San Gerardo','San Jorge','San Luis de la Reina','San Migues','San Rafael Oriente','Sesori','Uluazapa');
}

if ($car==13)
{
  $materias=array('Arambala','Cacaopera','Chilanga','Corinto','Delicias','El Divisadero','El Rosario','Gualococti','Guatajiagua','Joateca','Jocoaitique','Jocoro','Lolotiquillo','Meanguera','Osicala','Perquin','San Carlos','San Fernando','San Francisco Gotera','San Isidro','San Sim�n','Sensembra','Sociedad','Torola','Yamabal');
}
if ($car==14)
{
  $materias=array('La Uni�n','San Alejo','Yucuaiqu�n','Conchagua','intipuc�','San Jos�','El Carmen','Yayantique','Bolivar','Meanguera del Golfo','Santa Rosa de Lima','Pasaquina','Anamor�s','Nueva Esparta','El Sauce','Concepci�n de Oriente','Polor�s','Lislique');
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