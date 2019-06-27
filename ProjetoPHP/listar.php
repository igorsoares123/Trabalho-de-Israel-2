<!DOCTYPE html>
<html>
<head>
	<title>Lista de jogadores</title>
	<style>
		a{
			text-decoration: none;
			color: black;
		}
		#btVoltar{
			margin-left: 45%;
		}
		#linha1{
			font-weight: bold;
			font-size: 30px;
			font-family: 'Arial';
		}
		#LJ{
			font-weight: bold;
			text-align: center;
			font-size: 50px;
			font-family: 'Arial';
		}
		table{
			border-color: black;
			font-family: 'Arial';
			text-align: center;
			background-color: white;
		}
	</style>
</head>
<body bgcolor="lightblue">
	<table border="1px" align="center">
		<tr>
			<td id="LJ" colspan="6">Lista de Jogadores</td>
		</tr>
		<tr id="linha1">
			<td align="center">N°</td>
			<td align="center">Jogadores</td>
			<td align="center">Emails</td>
			<td align="center">Senhas</td>
			<td colspan="2" align="center">Ações</td>
		</tr>
		<?php
			include_once 'conexao.php';
			$sql = "select * from dados";
			$r = mysqli_query($con, $sql);
			if ($r) {
			while ($linhas = mysqli_fetch_assoc($r)) {
				$id = $linhas['id'];
				$nome = $linhas['nome'];
				$email = $linhas['email'];
				$senha = $linhas['senha'];

				?>
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $nome; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $senha; ?></td>
			<td><button><a href="editar.php?id=<?php echo $id ?>">Editar</a></button></td>
			<td><button><a href="excluir.php?id=<?php echo $id ?>">Excluir</a></button></td>
			</tr>
			<?php
		}
	}?>
	</table>
	<button id="btVoltar"><a href="index.php">Voltar ao cadastro</a></button>
</body>
</html>