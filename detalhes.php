<html>
	<head>
		<title>Crud de Alunos em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="frm-detalhes-aluno" action="atualiza-aluno.php" method="post">
			<?php
			include("conexao.php");
			$id = utf8_decode($_GET['id']);
			$sql = mysql_query("select * from aluno where id = '$id'");
			$aluno = mysql_fetch_object($sql);

			echo "<label id='lbl_numero'>Número: </label>";
			echo "<input type='text' id='txt_numero' name='id' value='". utf8_encode($aluno->id) ."' /></br>";
			echo "<label id='lbl_nome'>Nome: </label>";
			echo "<input type='text' id='txt_nome' name='nome' value='". utf8_encode($aluno->nome) ."' /></br>";
			echo "<label id='lbl_idade'>Idade: </label>";
			echo "<input type='text' id='txt_idade' name='idade' value='". utf8_encode($aluno->idade) ."' /></br>";
		?>
			<input type="button" id="btn-voltar" value="Voltar" onclick="window.location.href='index.php'" />
			<input type="submit" id="btn-salvar" value="Salvar" />
		</form>
	</body>
</html>