<?php

include 'conexao.php';

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$sql = "SELECT id_candidato, cpf, senha, nome FROM curriculos WHERE cpf = '$cpf' AND senha = '$senha' ";
$buscar = mysqli_query($conexao,$sql);

while ($array = mysqli_fetch_array($buscar)) {
   		$id     = $array['id_candidato'];
		$cpf  = $array['cpf'];
		$nome   = $array['nome'];
   	}

$total = mysqli_num_rows($buscar);

	if ($total > 0) {

		session_start();
		$_SESSION['autenticado'] = 'sim';
		$_SESSION['id'] = $id;
		
		header('Location: cadastro.php');
	
	} else {
		session_start();
		$_SESSION['login'] = 'erro3';
		header('Location: login.php');	
	}




?>