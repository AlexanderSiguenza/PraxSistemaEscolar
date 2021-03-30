<?php
session_start(); // start session.
if ($_SESSION["privilegio"]!="Administrativo"){
    header("location:login.html");
    exit();
}
?>