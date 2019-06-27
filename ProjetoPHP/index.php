<html>
<head>
	<title>Cadastro</title>
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
			border: 3px solid blue;
			padding: 10px;
		}
		input{
			width: 100%;
			padding: 7px;
			margin-top: 5px;
			border-radius: 3px;
			outline: 0;
			font-weight: bold;	
			font-size: 18px;
			border:1.5px solid #000;
			background-color:rgba(190, 355, 0,0.1);
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
			background-color: blue;
			color: black; 
		}
		input:focus{
			border: 1.5px solid blue;
			background-color:lightblue;
		}
		button{
		 	color: black;
		 	margin-left: 49%;
		 	width: 50px;
		 	background-color: blue;
		}
		a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<form action="index.php" method="POST">
		<fieldset>
			<legend>Cadastro de Jogadores</legend>
			<input type="text" name="nome" placeholder="Digite o nome do usuário" required><br>
			<input type="email" name="email" placeholder="Digite seu Email" required><br>
			<input type="password" name="senha" placeholder="Digite sua Senha" required><br>
			<input type="submit" name="enviar" value="Enviar" onclick="abrir()"><br>
		</fieldset>
	</form>
	<button><a href="listar.php">Lista</a></button>
	<?php
		include_once"conexao.php";
		if (isset($_POST['enviar'])) {
			$id = $_POST['id'];
		 	$nome = $_POST['nome'];
		 	$email = $_POST['email'];
		 	$senha = $_POST['senha'];
		 	mysqli_query($con,"INSERT INTO dados(nome,email,senha)VALUES('$nome','$email','$senha')");
		 	mysqli_close($con);
		 	header('location:listar.php');
		 	
		 } 
	?>
	<script>
		function abrir(){
			var j = document.getElementById('j').style.display = "block";
		}
		function fechar(){
			var t = document.getElementById('j').style.display = "none";
		}
	</script>
</body>
</html>