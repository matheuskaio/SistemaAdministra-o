<?php
    include 'select.php';
    include 'update.php';
    require_once 'connection.php';
    class CRUD{
      private $conn;
      public function __construct(){
        $this->conn = new Connection;
      }

      public function insert($table,$obj){
          $sql = 'insert into '.$table.' (';
          foreach ($obj->getFieds() as $key => $value) {
            $sql .= $key.',';
          }
          $sql = substr_replace($sql,') values (', -1);
          foreach ($obj->getFieds() as $value) {
            $sql .= '\''.$value.'\',';
          }
          $sql = substr_replace($sql,')', -1);
          // echo $sql;
          echo $this->conn->getConnection()->query($sql);
      }
      public function deletar($table,$condiction){
        echo 'delete from '.$table.' where '.$condiction;
      }

      public function update($table,$obj,$condiction){
        $sql = 'update '.$table;
        foreach ($obj as $key => $value) {
          $sql .= 'set '.$key.'='.$value.',';
        }
        $sql = substr_replace($sql,'', -1);
        echo $sql.' where '.$condiction;
      }

      public function select($fields,$condiction){
        $sql = 'select ';
        foreach ($fields as $key => $value) {
          $sql.=$value.',';
        }
        $sql = substr_replace($sql,' from ', -1);
        echo $sql.=$condiction;
      }
    }
    // insert('teste',array('id'=>'marcio','nome'=>'marcio','livro'=>'book'));
    // select(['id','nome'],'teste where   id = 1');
    // deletar('teste','id = 1');
    // update('teste',array('nome'=>'marcio','livro'=>'book'),'id=1')
