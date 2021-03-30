addEvent(window,'load',inicializarEventos,false);

function inicializarEventos()
{
  var select1=document.getElementById('carreras');
  addEvent(select1,'change',mostrarMaterias,false);
}

var conexion1;
function mostrarMaterias(e) 
{
  var codigo=document.getElementById('carreras').value;
  if (codigo!=0)
  {
    conexion1=crearXMLHttpRequest();
    conexion1.onreadystatechange = procesarEventos;
    conexion1.open('GET','pagina1.php?cod='+codigo, true);
    conexion1.send(null);
  }
  else
  {
    var select2=document.getElementById('materias');
    select2.options.length=0;
  }
}

function procesarEventos()
{
  if(conexion1.readyState == 4)
  {
    var d=document.getElementById('espera');
    d.innerHTML = '';
    var xml = conexion1.responseXML;
    var pals=xml.getElementsByTagName('materia');
    var select2=document.getElementById('materias');
    select2.options.length=0;
    for(f=0;f<pals.length;f++)
    {
      var op=document.createElement('option');
      var texto=document.createTextNode(pals[f].firstChild.nodeValue);
      op.appendChild(texto);
      select2.appendChild(op);
    } 
  } 
  else 
  {
    var d=document.getElementById('espera');
    d.innerHTML = '<img src="cargando.gif">';
  }
}


//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}