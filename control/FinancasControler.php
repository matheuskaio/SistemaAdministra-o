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

		public function chamar($metodo,$parametros){
			if($metodo == 'definirDesconto'){
				$idMensalidade = $parametros['id'];
				$desconto = $parametros['desconto'];
				$this->definirDesconto($idMensalidade,$desconto);
			}else if($metodo == 'listarAlunos'){
				$this->listarAlunos();
			}
		}
	}
	$class = "FinancasControler";
	$funcionario = $class::getInstance();
	$parametros = isset($_POST['parametros'])?$_POST['parametros']:'';
	$metodo = $_POST['metodo'];
	$funcionario->chamar($metodo,$parametros);
?>