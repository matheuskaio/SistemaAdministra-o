<?php 

	include 'dbaccess/crud.php';

	class Contratado{
		private $usuario;
		private $perfil;
		private $salario;

		public function listarAlunos(){
			return selectAlunos();
		}

		public function definirDesconto($id,$desconto){
			update($id,$desconto);
		}
	}
	
?>