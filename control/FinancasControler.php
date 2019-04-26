<?php  
	class FinancasControler{
		private static $financasControler = null;
		private function __construct()
		{
					
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
			echo json_encode(array('bola' => 'nike'));
		}

		public function chamar($metodo,$parametros){
			if($metodo == 'definirDesconto'){
				$msg = $parametros['msg'];
				$this->definirDesconto($msg);
			}else if(0){}
		}
	}
	$class = "FinancasControler";
	$funcionario = $class::getInstance();
	$parametros = $_POST['parametros'];
	$metodo = $_POST['metodo'];
	$funcionario->chamar($metodo,$parametros);
?>