<?php

session_start();

include 'conexao.php';

mysqli_set_charset($conexao, 'utf8');

$dataCadastro	= date('Y-m-d') ;
$nome			= $_POST ['nome'];
$cpf    		= $_POST ['cpf'];
$email 			= $_POST ['email'];
$senha			= $_POST ['senha'];
$senha2			= $_POST ['senha2'];

$sqlTeste = "SELECT id_candidato FROM curriculos WHERE cpf = '$cpf' ";
$buscarTeste = mysqli_query($conexao,$sqlTeste);

$total = mysqli_num_rows($buscarTeste);

	echo $total;

	if ($total > 0) {
		$_SESSION['login'] = 'cpf';
		header('Location: pre_cadastro.php')	;
	} else {

	
		if ($senha != $senha2) {
			$_SESSION['login'] = 'erro1';
			$_SESSION['nome'] = $nome;
			$_SESSION['cpf'] = $cpf;
			$_SESSION['email'] =$email;
			header('Location: pre_cadastro.php');
		} 
		else {
			$sql = "INSERT INTO curriculos (`data_cadastro`, `nome`, `cpf`, `email`, `senha`)  
			VALUES ('$dataCadastro',
		 	'$nome',
		 	'$cpf',
		 	'$email',
		 	'$senha')";

	 		$inserir = mysqli_query($conexao, $sql);

	 		$_SESSION['id'] = mysqli_insert_id($conexao);
	 		$_SESSION['autenticado'] = 'sim';

			header('Location: cadastro.php');
		}
	}



?>