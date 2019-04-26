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

		private function definirDesconto($mensagem){
			echo $mensagem;
		}

		private function getAlunos(){
			echo $this->gerente->listarAlunos();
		}

		public function chamar($metodo,$parametros){
			if($metodo == 'definirDesconto'){
				$msg = $parametros['msg'];
				$this->definirDesconto($msg);
			}else if($metodo == 'getAlunos'){
				$this->getAlunos();
			}
		}
	}
	$class = "FinancasControler";
	$funcionario = $class::getInstance();
	$parametros = isset($_POST['parametros'])?$_POST['parametros']:'';
	$metodo = $_POST['metodo'];
	$funcionario->chamar($metodo,$parametros);
?>