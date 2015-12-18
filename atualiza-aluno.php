<?php
	include("conexao.php");
	$id = utf8_encode($_POST['id']);
	$nome = utf8_decode($_POST['nome']);
	$idade = utf8_encode($_POST['idade']);
	mysql_query("update aluno set nome = '$nome', set idade = '$idade' where id = '$id'");
	header("Location: index.php");
?>