<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg" id="modalDeFora" pointer-events="auto">
   			<div class="modal-content" id="modalAlteracoes">
      			<p>DADOS</p>
      				<img src="img/user.png" id="userImg">
      				<div id="dadosAluno">
      					<form>
      						<div id="bloco1">
      							<div class="form-group row" >
								    <label class="col-sm-2 col-form-label">Nome:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly name="nome" class="form-control-plaintext" id="ipnome" value="Marcos Cabeção Pedroza">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Endereço:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly name="endereco" class="form-control-plaintext" id="ipendereco" value="Rua Augusta, Serrinha, nº 24">
								    </div>
								</div>
      						</div>
      						<div id="bloco2">
      							<div class="form-group row">
								    <label class="col-sm-2 col-form-label">CPF:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipcpf" name="cpf" value="171.024.069-11">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">RG:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="iprg" name="RG" value="2.242.242">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Fone:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="iptelefone" name="telefone" value="(24)96969-6969">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Turma:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipturma" name="codTurma" value="011">
								    </div>
								</div>

      						</div>
      						<div id="bloco3">
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Mestre:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipmestre" name="mestre" value="Kid Bengala">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Faixa:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipfaixa" name="faixa" value="Fúcsia">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Aulas:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipaulas" name="aulas" value="2ª, 5ª">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Horários:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="iphorarios" name="aulas" value="8h às 10h">
								    </div>
								</div>
      						</div>
      					</form>
					</div>
      			<div id="pagamento">
      				<p>PAGAMENTO</p>
      				<img src="https://images.vexels.com/media/users/3/135826/isolated/preview/2d73c63013103668eb2db03015afd969-pacote-de-notas-de-d--lar-by-vexels.png" id="pgIMG">
      				<form>
      					<div id="bloco4">
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Matriculado:</label>
								    <div class="col-sm-10">
								      <input type="Date" readonly class="form-control-plaintext" id="ipmatricula" name="dataMatricula" value="04/22/1500">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Valor Mensalidade:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipmensalidade" name="mensalidade" value="R$ 50,00">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Nova Mensalidade:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipnovamensalidade" name="novaMensalidade" value="R$ 40,00">
								    </div>
								</div>						
      						</div>
      						<div id="bloco5">
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Data Mensalidade:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipdatamensalidade" name="dataMensalidade" value="22">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Desconto:</label>
								    <div class="col-sm-10">
								      <input type="text"  class="form-control-plaintext" id="ipdesconto" name="desconto" value="">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Valor descontado:</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="ipvalordesconto" name="valor" value="R$ 10,00">
								    </div>
								</div>
								<div class="form-group row">
								    <label class="col-sm-2 col-form-label">Mês Desconto:</label>
								    <div class="col-sm-10">
								      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
												<option selected>Janeiro...</option>
												<option value="1">Fevereiro</option>
												<option value="2">Março</option>
												<option value="3">Abril</option>
												<option value="3">Maio</option>
												<option value="3">Abril</option>
												<option value="3">Junho</option>
												<option value="3">Julho</option>
												<option value="3">Agosto</option>
												<option value="3">Setembro</option>
												<option value="3">Outubro</option>
												<option value="3">Novembro</option>
												<option value="3">Dezembro</option>
											</select>
								    </div>
								</div>
      				</form>
							<div id="botoes">
									<button type="button" class="btn btn-success">Salvar</button>
									<button type="button" class="btn btn-danger">Cancelar</button>
						</div> 
						</div> 						
    		</div>
				
			</div>
			<div id="botoes">
					<button type="button" class="btn btn-success">Salvar</button>
					<button type="button" class="btn btn-danger">Cancelar</button>
				</div> 
	</div>
	<script>
	$(document).ready(function(){	
		$( "#ipdesconto" ).keyup(function() {
			$('#ipvalordesconto').val($(this).val()/100*$('#ipmensalidade').val());
			$('#ipnovamensalidade').val($('#ipmensalidade').val()-$('#ipvalordesconto').val());
		});
		$(".btn-success").click(function(){
			var post = {
		    metodo: 'definirDesconto', 
				parametros:{
					id: 1,
					desconto : $('#ipdesconto').val()
				}
			};
			$.post("control/FinancasControler.php",post,function( data ) {
				alert(data);
			});
		});
	});
</script>