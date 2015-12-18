<?php
	include("conexao.php");
	$id = utf8_encode($_POST['id']);
	$nome = utf8_decode($_POST['nome']);
	$idade = utf8_encode($_POST['idade']);
	if($id == "0"){
		mysql_query("insert into aluno(nome, idade) values('$nome', '$idade')");
	}else{
		mysql_query("update aluno set nome = '$nome', set idade = '$idade' where id = '$id'");
	}
	header("Location: index.php");
?>