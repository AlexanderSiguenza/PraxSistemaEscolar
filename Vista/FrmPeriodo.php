<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>sistema de registro academico</title>
<script language="javascript" type="text/javascript" src="../Javascript/Mascara.js"></script>
<link href="../CSS/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="cal_alumno.js"></script>
<script type="text/javascript">
    window.onload = function(){
        new JsDatePick({
            useMode:2,
            target:"inputField",
            dateFormat:"%d-%M-%Y"
            /*selectedDate:{
                day:5,
                month:9,
                year:2006
            },
            yearsRange:[2000,2020],
            limitToToday:false,
            cellColorScheme:"beige",
            dateFormat:"%m-%d-%Y",
            imgPath:"img/",
            weekStartDay:1*/
        });
    };
</script>
<style type="text/css">
<!--
.Estilo11 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="header">
    <div id="topmenu">
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="logo">
        <h1><a href="#">PRAX</a></h1>
        <h2><a href="#">sistema de registro academico y expediente</a></h2>
  </div>
</div>
<div id="menu">
    <ul>
        <li class="first"><a href="FrmRegisAcade.html" title="">inicio</a></li>
        <li><a href="FrmPeriodo.php" title="">agregar</a></li>
        <li><a href="../Consultas/Conperiodo.php" title="">Mostrar</a></li>
        <li><a href="../Modificacion/Conperiodo.php" title="">Modificar  /  eliminar</a></li>
    </ul>
</div>
<div id="content">
  <form method="post" name="formu"  onsubmit="return chequeo_Trimestre(formu)" action="../Control/AgregarPeriodo.php">
  <p align="left"><img src="../CSS/ico/Open-folder-add-256.png" alt="" width="88" height="83" /><span class="Estilo11">................................................................................</span><strong>Ingresar Trimestre</strong></p>
    <table width="335" border="0" align="center">
      <tr>
        <td>*Trimestre :</td>
        <td><input type="text" name="Descripcion" onkeypress="return validarText(event)" maxlength="20"/></td>
      </tr>
       <tr>
        <td>*Descripcion :</td>
        <td><input type="text" name="Nombre" onkeypress="return validarText(event)" maxlength="4"/></td>
      </tr>
       <tr>
        <td></td>
        <td align="left"><div style="color: #000000; font-size: 12px;"><strong> ejemplo: TI, TII, TIII </strong></div></td>
      </tr>
      <td>*Fecha de Inicio:</td>
      <td><input type="text" name="fechaini" id="inputField" readonly="readonly" maxlength="12" /></td>
    </tr>
    <tr>
      <td>*Fecha de Final:</td>
      <td><input type="text" name="fechafin"  onkeyup="mascara(this,'/',fecha,true)" maxlength="12" /></td>
    </tr>
     <tr>
      <td>*Estado :</td>
      <td><select name="estado">
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
      </select></td>
    </tr>
    <tr>
        <td>*Año :</td>
        <td><select name="anho">
            <?
       include_once('../Modelo/C_institucion.php');
       $a=new institucion();
       $consulta= $a->mostrar_institucion();
       while($registro=mysql_fetch_array($consulta))
      {
        if ($registro["Estado"]=="Activo"){
              echo"<option value=".$registro["Anho"]." > ".$registro["Anho"]."</option>\n";
          }
      }
    ?>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><p align="right">
            <input type="submit" value="Agregar" />
            <input type="reset" value="Cancelar" />
        </p></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>