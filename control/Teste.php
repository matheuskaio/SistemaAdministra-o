<?php
require_once '../domain/Aluno.php';
require_once '../domain/dbaccess/crud.php';
$a = new Aluno(
	$_POST['nome'],
	$_POST['cpf'],
	'1',
	$_POST['rg'],
	'2','2','2','2','2',
	$_POST['email'],
	$_POST['senha']
);
$c = new CRUD;

$c->insert('endereco',   $a->getEndereco());
$c->insert('usuario',   $a);
