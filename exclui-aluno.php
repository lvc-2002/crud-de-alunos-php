<?php
	include("conexao.php");
	$id = utf8_decode($_GET['id']);
	$sql = mysql_query("delete from aluno where id = '$id'");
	header("Location: index.php");
?>