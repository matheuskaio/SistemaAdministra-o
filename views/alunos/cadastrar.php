<div id="conteudoaluno">
	<form action="">
		<div class="dadosPessoais">
			<div class="container mt-4 background-add-aluno">
				<div class="row">
					<div class="col-md-12">
						<br>
						<h3 class="text-center">Dados Pessoais</h3>
						<div class="form-row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="" class="nome" >Nome:</label>
									<input type="name" name="nome" class="form-control" placeholder="Nome"/>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="" class="nome" >Data de Nascimento:</label>
									<input type="date" name="data_nascimento" class="form-control"/>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="" class="nome">CPF:</label>
								<input type="name" name="cpf" class="form-control" placeholder="CPF"/>
							</div>
							<div class="form-group col-md-4">
								<label for="" class="nome">RG:</label>
								<input type="name" name="rg" class="form-control" placeholder="RG"/>
							</div>		
							<div class="form-group col-md-4">
								<label for="" class="nome">Sexo:</label>
								<select class="form-control" name="sexo" id="sel1">
									<option value="" selected>-------</option>
									<option value="masculino">Masculino</option>
									<option value="feminino">Feminino</option>
								</select>
							</div>		
						</div>
					</div>				
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="" class="nome">Faixa Atual:</label>
									<select class="form-control" name="sexo" id="sel1">
										<option value="branco">Branco</option>
										<option value="amarelo">Amarelo</option>
										<option value="vermelho">Vermelho</option>
										<option value="laranja">Laranja</option>
										<option value="verde">Verde</option>
										<option value="roxa">Roxa</option>
										<option value="marrom">Marrom</option>
										<option value="preta">Preta</option>
									</select>
							</div>
							<div class="form-group col-md-4">
								<label>Foto:</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dadosLogin">
			<div class="container mt-4 background-add-aluno">
				<div class="col-md-12">
					<br>
					<h3 class="text-center">Dados de Login</h3>
					<div class="form-row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="" class="nome">E-mail:</label>
								<input type="name" name="email" class="form-control" placeholder="E-mail"/>
							</div>	
						</div>
						<div class="col-md-4">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="" class="nome">Senha:</label>
								<input type="password" name="senha" class="form-control" placeholder="Senha"/>
							</div>	
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="" class="nome">Confirmar Senha:</label>
								<input type="password" name="senha1" class="form-control" placeholder="Confirmar Senha"/>
							</div>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="dadosTurma">
			<div class="container mt-4 background-add-aluno">
				<br>
				<h3 class="text-center">Turma</h3>
				<div class="col-md-12 mt-3">
					<div class="form-row">
						<div class="col-md-8">
							<table class="table">
								<thead>
									<tr>
										<th>Codigo</th>
										<th>Dias de Aula</th>
										<th>Horário</th>
										<th>Mestre</th>
										<th>Local</th>
										<th>Nível</th>
										<th>Vagas</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>0001</td>
										<td>2ª/5ª</td>
										<td>8h - 12h</td>
										<td>Cabeção</td>
										<td>S1</td>
										<td>Iniciante</td>
										<td>10</td>
									</tr>
									<tr>
										<td>2519</td>
										<td>3ª/4ª</td>
										<td>10h - 14h</td>
										<td>Zé Colmeia</td>
										<td>S41</td>
										<td>Avançado</td>
										<td>1</td>
									</tr>
									<tr>
										<td>0341</td>
										<td>4ª/6ª</td>
										<td>8h - 12h</td>
										<td>Pica-pau</td>
										<td>S13</td>
										<td>Médio</td>
										<td>10</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="" class="nome">Código:</label>
								<input type="name" name="codigo" class="form-control" placeholder="Código"/>
							</div>
							<div class="form-group">
								<label for="" class="nome">Mestre:</label>
								<input type="name" name="codigo" class="form-control" disabled/>
							</div>
							<div class="form-group">
								<label for="" class="nome">Dias de Aula:</label>
								<input type="name" name="codigo" class="form-control" disabled/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-4 mb-4">
			<button type="submit" class="btn btn-success"><strong>Salvar</strong></button>
			<button type="submit" class="btn btn-danger"><strong>Cancelar</strong></button>
		</div>
	</form>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>