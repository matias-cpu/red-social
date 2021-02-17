<?php

session_start(); //inicia una nueva sesion o reanuda la existente.


$_SESSION = array();

session_destroy();
header('location:../index.php');

?>