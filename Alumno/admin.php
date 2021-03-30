<?php
session_start(); // start session.
if ($_SESSION["privilegio"]!="Alumno"){
    header("location:../Vista/login.html");
    exit();
}
?>