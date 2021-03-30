var fecha = new Array(2,2,4)
var documento = new Array(8,1)
var telefon = new Array(4,4)
var nota = new Array(2,2)

function mascara(d,sep,pat,nums){
if(d.valant != d.value){
    val = d.value
    largo = val.length
    val = val.split(sep)
    val2 = ''
    for(r=0;r<val.length;r++){
        val2 += val[r]  
    }
    if(nums){
        for(z=0;z<val2.length;z++){
            if(isNaN(val2.charAt(z))){
                letra = new RegExp(val2.charAt(z),"g")
                val2 = val2.replace(letra,"")
            }
        }
    }
    val = ''
    val3 = new Array()
    for(s=0; s<pat.length; s++){
        val3[s] = val2.substring(0,pat[s])
        val2 = val2.substr(pat[s])
    }
    for(q=0;q<val3.length; q++){
        if(q ==0){
            val = val3[q]
        }
        else{
            if(val3[q] != ""){
                val += sep + val3[q]
                }
        }
    }
    d.value = val
    d.valant = val
    }
}


function validarTextUsuarios(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron =/[A-Za-z]/; // 4 acepta solo texto A-Z a-z
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function validarText(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron = /\D/; // No acepta números
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
function validarAno(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron = /\d/; // Solo acepta números
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
function validarnumero(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron = /[0123456789.]/; // Solo acepta numero y punto
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function validarnumero2(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron = /[0123456789.]/; // Solo acepta numero y punto
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
} 


function chequeo(formu) {

if (!formu.Responsable.value){
alert ("Por favor, un Responsable.")
formu.Responsable.focus();
return false;
}
if (!formu.nombres.value){
alert ("Por favor, introduzca su nombre .")
formu.nombres.focus();
return false;
}
if (!formu.apellido1.value){
alert ("Por favor, introduzca su Apellido1 .")
formu.apellido1.focus();
return false;
}
if (!formu.direccion.value){
alert ("Por favor, introduzca su Direccion .")
formu.direccion.focus();
return false;
}
if (!formu.departamento.value){
alert ("Por favor, introduzca Departamento .")
formu.Departamento.focus();
return false;
}
if (!formu.municipio.value){
alert ("Por favor, introduzca municipio .")
formu.municipio.focus();
return false;
}
if (!formu.usuario.value){
alert ("Por favor, introduzca su Usuario .")
formu.usuario.focus();
return false;
}
if (!formu.contrasena.value){
alert ("Por favor, introduzca su Contraseña .")
formu.contrasena.focus();
return false;
}
if (!formu.Descripcion.value){
alert ("Por favor, introduzca Descripcion.")
formu.Descripcion.focus();
return false;
}
if (!formu.fechaini.value){
alert ("Por favor, introduzca fecha inicio")
return false;
}
if (!formu.fechafin.value){
alert ("Por favor, introduzca fecha inicio")
return false;
}
}



function chequeo_Responsable(formu) {

if (!formu.Nombre.value){
alert ("Por favor, un Nombre.")
formu.Nombre.focus();
return false;
}
if (!formu.Apellido1.value){
alert ("Por favor, introduzca su Apellido1 .")
formu.Apellido1.focus();
return false;
}
if (!formu.Direccion.value){
alert ("Por favor, introduzca su Direccion .")
formu.Direccion.focus();
return false;
}
if (!formu.Dui.value){
alert ("Por favor, introduzca su Dui .")
formu.Dui.focus();
return false;
}
if (!formu.Parentesco.value){
alert ("Por favor, introduzca su Parentesco .")
formu.Parentesco.focus();
return false;
}
if (!formu.Departamento.value){
alert ("Por favor, introduzca Departamento .")
formu.Departamento.focus();
return false;
}
if (!formu.municipio.value){
alert ("Por favor, introduzca municipio .")
formu.municipio.focus();
return false;
}
}



function chequeo_Actividad(formu) {

if (!formu.Descripcion.value){
alert ("Por favor, introduzca Actividad .")
formu.Descripcion.focus();
return false;
}
if (!formu.Nombre.value){
alert ("Por favor, introduzca Descripcion.")
formu.Nombre.focus();
return false;
}
if (!formu.Porcentaje.value){
alert ("Por favor, introduzca Porcentaje.")
formu.Porcentaje.focus();
return false;
}
}



function Adminitrativo(formu) {

if (!formu.nombres.value){
alert ("Por favor, introduzca su nombre .")
formu.nombres.focus();
return false;
}
if (!formu.apellido1.value){
alert ("Por favor, introduzca su Apellido1 .")
formu.apellido1.focus();
return false;
}
if (!formu.fechanaci.value){
alert ("Por favor, introduzca su fechanaci .")
formu.fechanaci.focus();
return false;
}
if (!formu.direccion.value){
alert ("Por favor, introduzca su Direccion .")
formu.direccion.focus();
return false;
}
if (!formu.departamento.value){
alert ("Por favor, introduzca Departamento .")
formu.Departamento.focus();
return false;
}
if (!formu.municipio.value){
alert ("Por favor, introduzca municipio .")
formu.municipio.focus();
return false;
}
if (!formu.dui.value){
alert ("Por favor, introduzca su dui .")
formu.dui.focus();
return false;
}
if (!formu.usuario.value){
alert ("Por favor, introduzca su Usuario .")
formu.usuario.focus();
return false;
}
if (!formu.contrasena.value){
alert ("Por favor, introduzca su Contraseña .")
formu.contrasena.focus();
return false;
}
if (!formu.Descripcion.value){
alert ("Por favor, introduzca Descripcion.")
formu.Descripcion.focus();
return false;
}
if (!formu.fechaini.value){
alert ("Por favor, introduzca fecha inicio")
return false;
}
if (!formu.fechafin.value){
alert ("Por favor, introduzca fecha inicio")
return false;
}
}


function busca_alumno(formu) {

if (!formu.Nombre.value){
alert ("Por favor, un Nombre.")
formu.Nombre.focus();
return false;
}
}


function Usuariologin(formu) {

if (!formu.usuario.value){
alert ("Por favor, un Usuario.")
formu.usuario.focus();
return false;
}
if (!formu.password.value){
alert ("Por favor, un password.")
formu.password.focus();
return false;
}
}


function chequeo_Trimestre(formu) {

if (!formu.Descripcion.value){
alert ("Por favor, introduzca Trimestre .")
formu.Descripcion.focus();
return false;
}
if (!formu.Nombre.value){
alert ("Por favor, introduzca Descripcion.")
formu.Nombre.focus();
return false;
}
if (!formu.fechaini.value){
alert ("Por favor, introduzca Fecha de Inicio.")
formu.fechaini.focus();
return false;
}
if (!formu.fechafin.value){
alert ("Por favor, introduzca Fecha de Final.")
formu.fechafin.focus();
return false;
}
}













