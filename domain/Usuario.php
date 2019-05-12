<?php
    include("Pessoa.php");
    require_once 'dbaccess/Persistent.php';
    class Usuario extends Pessoa implements Persistent{
        private $email;
        private $senha;

        public function __construct($email,$senha){
            $this->email = $email;
            $this->senha = $senha;
        }

        public function getFieds(){
          return get_object_vars($this);
        }
    }
