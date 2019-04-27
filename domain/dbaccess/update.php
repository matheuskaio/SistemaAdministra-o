<?php
    function update($id,$desconto){
        
        include 'connection.php';

        $sql = 'update mensalidade set desconto = '.$desconto.' where id = '.$id;

        $result = $conn->query($sql);

    }
?>