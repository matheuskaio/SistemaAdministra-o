<?php
	include '../domain/Contratado.php';
	class FinancasControler{
		private static $financasControler = null;
		private $gerente;
		private function __construct()
		{
			$this->gerente = new Contratado();
		}

		public static function getInstance(){
			if(self::$financasControler == null){
				$financasControler = new FinancasControler();
			}
			return $financasControler;
		}

		private function definirDesconto($idMensalidade,$desconto){
			$this->gerente->definirDesconto($idMensalidade,$desconto);
			echo 'Desconto registrado com sucesso!';
		}

		private function listarAlunos(){
			echo $this->gerente->listarAlunos();
		}

		private function getAluno($id){
			echo selectAlunoById($id);
		}
		public function chamar($metodo,$parametros){
			if($metodo == 'definirDesconto'){
				$idMensalidade = $parametros['id'];
				$desconto = $parametros['desconto'];
				$this->definirDesconto($idMensalidade,$desconto);
			}else if($metodo == 'listarAlunos'){
				$this->listarAlunos();
			}else if($metodo == 'getAluno'){
				$idAluno = $parametros['id'];
				$this->getAluno($idAluno);
			}

		}
	}


	$funcionario = FinancasControler::getInstance();
	$parametros = isset($_POST['parametros'])?$_POST['parametros']:'';
	$metodo = isset($_POST['metodo'])?$_POST['metodo']:'';
	$funcionario->chamar($metodo,$parametros);
?>
