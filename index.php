<!DOCTYPE html>
<html>
<head>
	<!--Inicio Tags OG -->
	
	<meta property="og:url"                content="" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="Vencer! Coaching - Cadastro de Currículos" />
	<meta property="og:description"        content="Acesse no site e cadastre seu currículo." />
	<meta property="og:image"              content="https://vencercoaching.f9sistemas.com.br/img/tag_og.png" />
	
	
	<!--Fim Tags OG -->

	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Login - Cadastro de Currículo</title>
    <link rel="icon" href="img/vencer.ico">
  
	

</head>
<?php
	session_start();

	session_destroy();
	header('Location: login.php');
	
?>