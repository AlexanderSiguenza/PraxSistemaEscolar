<?php
session_start(); // start session.
if ($_SESSION["privilegio"]!="Docente"){
    header("location:../Vista/login.html");
    exit();
}
?>