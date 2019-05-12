<?php
    require_once 'dbaccess/Persistent.php';
    require_once 'Endereco.php';
    class Pessoa implements Persistent{
        private $nome;
        private $cpf;
        private $telefone;
        private $rg;
        private $endereco;

        public function __construct($nome,$cpf,$telefone,$rg,$rua,$cidade,$bairro,$estado,$numero)
        {
          $this->nome = $nome;
          $this->cpf = $cpf;
          $this->telefone = $telefone;
          $this->rg = $rg;
          $this->endereco = new Endereco($rua,$cidade,$bairro,$estado,$numero);
        }

        public function getNome(){
          return $this->nome;
        }

        public function getCpf(){
          return $this->cpf;
        }

        public function getTelefone(){
          return $this->telefon;
        }

        public function getRg(){
          return $this->rg;
        }

        public function getEndereco(){
          return $this->endereco;
        }

        public function getFieds() {
          $fields = get_object_vars($this);
          unset($fields['endereco']);
          return $fields;
        }
    }
