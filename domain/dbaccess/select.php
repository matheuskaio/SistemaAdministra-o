<?php  
	
	function selectAlunos(){
		include 'connection.php';
		$sql = 'select a.id,a.id_turma,u.nome,u.cpf,faixa from aluno a,usuario u where a.id=u.id';
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
	    	$alunos = array();
		    while($row = $result->fetch_assoc()) {
		        array_push($alunos, $row);
		    }
		    echo json_encode($alunos);
		} else {
		    echo "0 results";
		}	
		$conn->close();
	}
?>