<?php
  require_once 'dbaccess/Persistent.php';
  class Endereco implements Persistent
  {
    private $rua;
    private $cidade;
    private $bairro;
    private $estado;
    private $numero;
    function __construct($rua,$cidade,$bairro,$estado,$numero)
    {
      $this->rua = $rua;
      $this->cidade = $cidade;
      $this->bairro = $bairro;
      $this->estado = $estado;
      $this->numero = $numero;
    }
    public function getFieds(){
      return get_object_vars($this);
    }
  }
