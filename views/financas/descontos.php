<div id="conteudo" class="container">

	<div class="container" id="filtragem">
		<form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <input type="text" class="form-control" id="inputCity"  placeholder="Filtrar por">
		    </div>
		    <div class="form-group col-md-4">
		      <select id="inputEstado" class="form-control">
		        <option selected="">Turma</option>
		        <option>Cidade</option>
		        <option>Código</option>
		        <option>Telefone</option>
		        <option>Faixa</option>
		        <option>Data de Nascimento</option>
		      </select>
		    </div>
		  </div>
		</form>
	</div>

	<div class="container" id="tabela">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Código</th>
		      <th scope="col">CPF</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Telefone</th>
		      <th scope="col">Endereço</th>
		      <th scope="col">Turma</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">123</th>
		      <td>171.024.069-11</td>
		      <td>Marcos Cabeção</td>
		      <td>(24)96969-6969</td>
		      <td>Rua Augusta</td>
		      <td>1v</td>
		      <td><a href="#" id="editar" lass="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Definir desconto</a></td>
		    </tr>
		  </tbody>
		</table>
	</div>


	 <!-- Modal -->
	 <?php include __DIR__.'/../components/modal.php' ?>
</div>
<script>
	$(document).ready(function(){
		var post = {
		    metodo: 'listarAlunos',
		};
		$.post("control/FinancasControler.php",post,function( data ) {
			console.log(data);
			$.each(jQuery.parseJSON(data), function(i, item) {
				$('tbody').append(
					'<tr>'+
						'<th scope="row">'+item.id+'</th>'+
						'<td>'+item.cpf+'</td>'+
						'<td>'+item.nome+'</td>'+
						'<td>'+item.telefone+'</td>'+
						'<td>'+item.rua+'</td>'+
						'<td>'+item.id_turma+'</td>'+
						'<td><a href="#" lass="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Definir desconto</a></td>'+
					'</tr>'
				);
			});
			$('tbody').on('click', 'a', function() {
				var post = {
					metodo: 'getAluno',
					parametros:{
						id: $(this).parent().parent().children('th').html()
					}
				};
				$.post("control/FinancasControler.php",post,function( data ) {

					var aluno = jQuery.parseJSON(data);
					$('#ipnome').val(aluno.nome);
					$('#ipendereco').val(aluno.endereco);
					$('#ipcpf').val(aluno.cpf);
					$('#iprg').val(aluno.rg);
					$('#iptelefone').val(aluno.telefone);
					$('#ipturma').val(aluno.id_turma);
					$('#ipmestre').val(aluno.mestre);
					$('#ipfaixa').val(aluno.faixa);
					$('#ipaulas').val(aluno.dias);
					$('#iphorarios').val(aluno.horas_aula);
					$('#ipmatricula').val(aluno.data_inicio);
					$('#ipmensalidade').val(aluno.valor);
					$('#ipvalordesconto').val($('#ipdesconto').val()/100*aluno.valor);
					$('#ipnovamensalidade').val(aluno.valor-$('#ipdesconto').val());
					$('#ipdatamensalidade').val(aluno.data);
				});
			});
		});
	});
</script>
