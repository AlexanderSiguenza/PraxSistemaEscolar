<?php
$car=$_REQUEST['cod'];
if ($car==1)
{
   $materias=array('Santa Ana','Texistepeque','Chalchuapa','Coatepeque','El Congo','El Porvenir','Metapan','Masahuat','San Antonio Pajonal','San Sebastian','Santa Rosa Guachipil','Candelaria de la Frontera','Santiago de la Frontera');
}
if ($car==2)
{
  $materias=array('Jujutla','Atiquizaya','Concepción de Ataco','El Refugio','Guaymango','Apaneca','San Francisco Menéndez','San Lorenzo','San Pedro Puxtla','Tacuba,Turín');
}
if ($car==3)
{
  $materias=array('Acajutla','Armenia','Caluco','Cuisnahuat','Izalco','Juayúa','Nahuizalco','Nahulingo','Salcoatitán','San Antonio del Monte','San Julián','Santa Catarina Masahuat','Santa Isabel Ishuatán','Santo Domingo','Sonsonate','Sonzacate');
}
if ($car==4)
{
  $materias=array('Antiguo Cuscatlán','Chiltiupán','Ciudad Arce','Colón','Comasagua','Huizúcar','Jayaque','Jicalapa','La Libertad','Santa Tecla','Nuevo Cuscatlán','San Juan Opico','Quezaltepeque','Sacacoyo','San José Villanueva','San Matías','San Pablo Tacachico','Talnique','Tamanique','Teotepeque','Tepecoyo','Zaragoza');
}
if ($car==5)
{
  $materias=array('Aguilares','Apopa','Ayutuxtepeque','Cuscatancingo','Delgado','El Paisnal','Guazapa','Ilopango','Mejicanos','Nejapa','Panchimalco','Rosario de Mora','San Marcos','San Martín','San Salvador','Santiago Texacuangos','Santo Tomás','Soyapango','Tonacatepeque');
}
if ($car==6)
{
  $materias=array('Candelaria','Cojutepeque','El Carmen','El Rosario','Monte San Juan','Oratorio de Concepción','San Bartolomé Perulapía','San Cristóbal','San José Guayabal','San Pedro Perulapán','San Rafael Cedros','San Ramón','Santa Cruz Analquito','Santa Cruz Michapa','Suchitoto','Tenancingo');
}
if ($car==7)
{
  $materias=array('Agua Caliente','Arcatao','Azacualpa','Chalatenango','Citalá','Comalapa','Concepción Quezaltepeque','Dulce Nombre de María','El Carrizal','El Paraíso','La Laguna','La Palma','La Reina','Las Vueltas','Nueva Concepción','Nueva Trinidad','Nombre de Jesús','Ojos de Agua','Potonico','San Antonio de la Cruz','San Antonio Los Ranchos','San Fernando','San Francisco Lempa','San Francisco Morazán','San Ignacio','San Isidro Labrador','San José Cancasque','San José Las Flores','San Luis del Carmen','San Miguel de Mercedes','San Rafael','Santa Rita','Tejutla');
}
if ($car==8)
{
  $materias=array('Cuyultitán','El Rosario','Jerusalén','Mercedes La Ceiba','Olocuilta','Paraíso de Osorio','San Antonio Masahuat','San Emigdio','San Francisco Chinameca','San Juan Nonualco','San Juan Talpa','San Juan Tepezontes','San Luis Talpa','San Luis La Herradura','San Miguel Tepezontes','San Pedro Masahuat','San Pedro Nonualco','San Rafael Obrajuelo','Santa María Ostuma','Santiago Nonualco','Tapalhuaca','Zacatecoluca');
}
if ($car==9)
{
  $materias=array('Cinquera','Dolores','Guacotecti','Ilobasco','Jutiapa','San Isidro','Sensutepeque','Tejutepeque','Victoria');
}
if ($car==10)
{
  $materias=array('Apastepeque','Guadalupe','San Cayetano Istepeque','San Esteban Catarina','San Ildefonso','San Lorenzo','San Sebastián','San Vicente','Santa Clara','Santo Domingo','Tecoluca','Tepetitán','Verapaz');
}
if ($car==11)
{
  $materias=array('Alegría','Berlín','California','Concepción Batres','El Triunfo','Ereguayquín','Estanzuelas','Jiquilisco','Jucuapa','Jucuarán','Mercedes Umaña','Nueva Granada','Ozatlán','Puerto El Triunfo','San Agustín','San Buenaventura','San Diosinisio','San Francisco Javier','Santa Elena','Santa María','Santiago de María','Tecapán','Usulután');
}
if ($car==12)
{
  $materias=array('Carolina','Chapeltique','Chinameca','Ciudad Barrios','Comacarán','El Tránsito','Lolotique','Moncagua','Nueva Guadalupe','Nuevo Edén de San Juan','Quelepa','San Antonio del Mosco','San Gerardo','San Jorge','San Luis de la Reina','San Migues','San Rafael Oriente','Sesori','Uluazapa');
}

if ($car==13)
{
  $materias=array('Arambala','Cacaopera','Chilanga','Corinto','Delicias','El Divisadero','El Rosario','Gualococti','Guatajiagua','Joateca','Jocoaitique','Jocoro','Lolotiquillo','Meanguera','Osicala','Perquin','San Carlos','San Fernando','San Francisco Gotera','San Isidro','San Simón','Sensembra','Sociedad','Torola','Yamabal');
}
if ($car==14)
{
  $materias=array('La Unión','San Alejo','Yucuaiquín','Conchagua','intipucá','San José','El Carmen','Yayantique','Bolivar','Meanguera del Golfo','Santa Rosa de Lima','Pasaquina','Anamorós','Nueva Esparta','El Sauce','Concepción de Oriente','Polorós','Lislique');
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