<?php


#cabeçalho
include 'views/components/header.php';

#menu
include 'views/components/nave.php';

#conteudo da pagina


if (isset($_GET['pagina'])) {
	$pagina = $_GET['pagina'];
}else{
	$pagina = 'home';
}

#Gerenciar Alunos
if ($pagina == 'cadastrar') {
	include 'views/alunos/cadastrar.php';
}elseif ($pagina == 'alterar') {
	include 'views/alunos/alterar.php';
}elseif ($pagina == 'trancar') {
	include 'views/alunos/trancar.php';
}elseif ($pagina == 'reativar') {
	include 'views/alunos/reativar.php';
}

#Gerenciar Finanças
elseif ($pagina == 'relatorios') {
	include 'views/financas/relatorios.php';
}elseif ($pagina == 'mensalidade') {
	include 'views/financas/mensalidade.php';
}elseif ($pagina == 'pendencias') {
	include 'views/financas/pendencias.php';
}elseif ($pagina == 'descontos') {
	include 'views/financas/descontos.php';
}

else{
	include 'views/home.php';
}



