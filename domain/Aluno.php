<?php
    require_once "Usuario.php";
    class Aluno extends Usuario implements Persistent{
    	private $usuario;
    	private $perfil;
    	private $mensalidade;
    	private $faixa;

      public function __construct($nome,$cpf,$telefone,$rg,$rua,$cidade,$bairro,$estado,$numero){
        parent::__construct($nome,$cpf,$telefone,$rg,$rua,$cidade,$bairro,$estado,$numero);
      }
      public function getFieds() {
        return array_merge(parent::getFieds(), get_object_vars($this));
      }
    }
