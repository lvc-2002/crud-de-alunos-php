<html>
	<head>
		<title>Crud de Alunos em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Crud de Alunos em PHP</h1>
		<a href="novo-aluno.php">Novo Aluno</a>
		<table border="1">
			<tr>
				<th>Número</th>
				<th>Nome</th>
				<th>Idade</th>
				<th>Opções</th>
			</tr>
			<?php
				include("conexao.php");
				$sql = mysql_query("select * from aluno");
				$dados = "";
				while($dados = mysql_fetch_object($sql)){
					echo "<tr>";
					echo "<td>";
					echo utf8_encode($dados->id). "</td>";
					echo "<td>";
					echo utf8_encode($dados->nome). "</td>";								
					echo "<td>";
					echo utf8_encode($dados->idade). "</td>";
					echo "<td>";
					echo "<a href='detalhes.php?id=". utf8_encode($dados->id) ."''>Visualizar </a>";
					echo "<a href='exclui-aluno.php?id=". utf8_encode($dados->id) ."''> Excluir</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>