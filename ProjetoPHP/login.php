<?php
include_once('conexao.php');
$usuario = $_POST['login'];
$pass = $_POST['senha'];


$sql = "SELECT * FROM usuario WHERE EMAIL = '$usuario' AND SENHA = $pass";

$r = mysqli_query($con, $sql);
if ($r) {
	header('location: index.php');	
}else{
	echo "esqueceu a senha burro!";
}

?>