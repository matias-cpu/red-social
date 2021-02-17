<?php


session_start();
$login =$_SESSION['login'];

if (!$login) {
	header('location:index.php');

}
else {

	$apodo =$_SESSION['apodo'];
}
?>