<?php  
	
	function selectAlunos(){
		include 'connection.php';
		$sql = 'select a.id,a.id_turma,u.nome,u.cpf,u.telefone,faixa,e.rua from aluno a,usuario u,endereco e where a.id=u.id and u.id_endereco = e.id';
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