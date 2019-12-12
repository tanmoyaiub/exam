<?php

	session_start();
	setcookie("username" , $uname , time()-3 , "/");
	header('location:../Views/login.php');

?>