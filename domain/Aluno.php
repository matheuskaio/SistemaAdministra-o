<?php
    require_once "Usuario.php";
    class Aluno extends Pessoa implements Persistent{
    	private $usuario;
    	private $perfil;
    	private $mensalidade;
    	private $faixa;

      public function __construct($nome,$cpf,$telefone,$rg,$rua,$cidade,$bairro,$estado,$numero,$email,$senha){
        parent::__construct($nome,$cpf,$telefone,$rg,$rua,$cidade,$bairro,$estado,$numero);
        $this->perfil = 'A';
        $this->usuario = new Usuario($email,$senha);
      }
      public function getFieds() {
        $fields = array_merge(array_merge(parent::getFieds(), get_object_vars($this)),$this->usuario->getFieds());
        unset($fields['mensalidade']);
        unset($fields['usuario']);
        unset($fields['faixa']);
        return $fields;
      }
    }
