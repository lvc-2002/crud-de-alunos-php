<html>
	<head>
		<title>Crud de Alunos em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="frm-novo-aluno" action="salva-aluno.php" method="post">
			<label id="lbl-nome" for="txt-nome">Nome: </label>
			<input type="text" id="txt-nome" name="nome" />
			<label id="lbl-idade" for="txt-idade">Idade: </label>
			<input type="text" id="txt-idade" name="idade" />
			<input type="hidden" name="id" value="0" />
			<input type="button" id="btn-voltar" value="Voltar" onclick="window.location.href='index.php'" />
			<input type="submit" id="btn-salvar" value="Salvar" />
		</form>
	</body>
</html>