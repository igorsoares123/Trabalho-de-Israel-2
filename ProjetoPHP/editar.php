<?php
	include_once('conexao.php');
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<style>
		*{
			padding: 0;
			margin: 0;
			font-family:'arial';
		}
		form{
			width: 400px;
			margin: 0 auto;
		}
		legend{
			text-align: center;
			font-size: 30px;
			font-weight:bold;
			color: black; 
		}
		fieldset{
			border: 3px solid red;
			padding: 10px;
		}
		input{
			width: 95%;
			padding: 7px;
			margin-top: 5px;
			border-radius: 3px;
			outline: 0;
			font-weight: bold;	
			font-size: 18px;
			border:1.5px solid #000;
			background-color:rgba(190, 355, 0,0.3);
		}
		input[type="submit"]{
			background-color: black;
			color: white;
			border: 0;
			font-size: 20px;
			width: 50%;
			margin-left: 25%; 
		}
		input[type="submit"]:hover{
			background-color: red;
			color: white; 
		}
		input:focus{
			border: 1.5px solid red;
			background-color:lightblue;
		}
	</style>
</head>
<body>
	<form method="POST">
		<fieldset>
		<legend>Editar</legend>
		<input type="text" name="nome" placeholder="Digite o novo Usuário" required><br>
		<input type="email" name="email" placeholder="Digite o novo Email" required><br>
		<input type="password" name="senha" placeholder="Digite a nova Senha" required><br>
		<input type="submit" name="alterar" value="Alterar">
		</fieldset>
		<?php
		if (isset($_POST['alterar'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			mysqli_query($con,"UPDATE dados SET nome='$nome', email='$email', senha='$senha' WHERE id=$id");
			header('location: listar.php');
		}
		?>
	</form>
</body>
</html>\