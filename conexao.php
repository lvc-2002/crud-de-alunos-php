<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bdName = "bd_alunos";

	mysql_connect($host, $user, $pass) or die(mysql_error());
	mysql_select_db($bdName);

?>