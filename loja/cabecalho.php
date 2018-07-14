<?php
 error_reporting(E_ALL ^ E_NOTICE);
 require_once("mostra-alerta.php");
  ?>
<!DOCTYPE html>
<html>
<head>
	<title> Minha Loja</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
	<style>
	.col-md-offset-4{
	 	padding-top: 100px;
	}
	.login{
		background: black;
	}
	
</style>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"> Minha Loja </a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php"> Adicionar Produto </a></li>
					<li><a href="produto-lista.php"> Produto </a></li>
					<li><a href="contato.php"> Contato </a></li>
				</ul>
				
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="principal">
			<?php mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>
