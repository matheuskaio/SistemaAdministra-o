<?php 
	include 'dbaccess/select.php';

	class Contratado{
		private $usuario;
		private $perfil;
		private $salario;
		public function listarAlunos(){
			return selectAlunos();
		}
	}
	
?>