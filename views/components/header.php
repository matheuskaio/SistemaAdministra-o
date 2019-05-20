<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="views/css/estilocabecalho.css">
	<link rel="stylesheet" type="text/css" href="views/css/estilomenu.css">
	<link rel="stylesheet" type="text/css" href="views/css/estiloconteudo.css">
	<link rel="stylesheet" type="text/css" href="views/css/estiloModal.css">
	<link rel="stylesheet" type="text/css" href="views/css/estiloconteudocadastraraluno.css">
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.mim.js"></script>
	<meta charset="utf-8">
	<title>Gerenciamento de Escola de Caratê</title>
</head>
<body>
	<header id="cabecalho">
			<?php
				$logged = true;
				if (!$logged):
					require_once 'views/components/nave/unlogged.php';
				else:
			?>
				<a href="?pagina=home"><h3 class="logo">Sistema de Cadastro</h3></a>
				<img class="user" src="views/img/user.png">
			<?php  endif ?>
	</header>
