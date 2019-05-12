<?php
	require_once 'connection.php';
	function selectAlunos(){
		$sql = 'select a.id,a.id_turma,u.nome,u.cpf,u.telefone,faixa,e.rua from aluno a,usuario u,endereco e where a.id=u.id and u.id_endereco = e.id';
		$conn = new Connection;
		$result = $conn->getConnection()->query($sql);

		if ($result->num_rows > 0) {
	    	$alunos = array();
		    while($row = $result->fetch_assoc()) {
		        array_push($alunos, $row);
		    }
		    echo json_encode($alunos);
		} else {
		    echo "0 results";
		}
		$conn->getConnection()->close();
	}

	function selectAlunoById($id){
		$sql = 'select a.id,a.id_turma,a.faixa,a.data_inicio,
				u.nome,u.cpf,u.telefone,u.rg,
				concat(e.rua,\', \', e.cidade,\', nº\',  e.numero) endereco,
				m.mestre,
				men.valor,men.data,
				t.dias,t.horas_aula
				from aluno a,usuario u,endereco e,turma t, mensalidade men,
				(SELECT us.nome mestre from usuario us,turma t where t.id_mestre = us.id) m
				where a.id=u.id and u.id_endereco = e.id and t.id=a.id_turma and a.id= men.id_aluno and a.id='.$id;
		$conn = new Connection;
		$result = $conn->getConnection()->query($sql);
		if ($result->num_rows > 0) {
		    $aluno = $result->fetch_assoc();
		    echo json_encode($aluno);
		} else {
		    echo "0 results";
		}
		$conn->getConnection()->close();
	}
?>
