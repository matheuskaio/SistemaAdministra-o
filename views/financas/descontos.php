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
		      <td><a href="#" id="editar">Editar</a></td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#editar').click(function(){
			var post = {
			    metodo: 'definirDesconto', 
			    parametros: {msg:"vai da certo"}
			};
			$.post("control/FinancasControler.php",post,function( data ) {
		    	alert(data);
			});
		});
	});
</script>

