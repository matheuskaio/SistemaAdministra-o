<?php
  require_once 'connection.php';
    function update($id,$desconto){



        $sql = 'update mensalidade set desconto = '.$desconto.' where id = '.$id;

        $conn = new Connection;
    		$result = $conn->getConnection()->query($sql);

    }
?>
