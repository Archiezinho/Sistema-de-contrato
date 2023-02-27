<?php
session_start();
require_once ('header.php');
?>
<div class="container">
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
    ?>
    <h4 class="text-center text-dark pt-2">Cadastrar Contrato  </h3>
        <form action="movimento/movimentoContrato.php" method="Post">

            <!-- caixas de texto -->
			 <div class="form-group">
			  <label for="tipo">Tipo de Contrato</label>
			<select class="form-select" name="tipo" aria-label="tipo">
				<option selected>Selecionar</option>
				<option value="Indeterminado">Indeterminado</option>
				<option value="Determinado">Determinado</option>
				<option value="Temporario">Temporario</option>
			</select>
			
			<div class="form-group">
                <label for="codFuncionario">Funcionário</label>
                <input class="form-control" type="text" id="codFuncionario" name="codFuncionario" placeholder="Digite o nome do funcionário">
            </div>
			<div class="form-group">
                <label for="codEmpresa">Empresa</label>
                <input class="form-control" type="text" id="codEmpresa" name="codEmpresa" placeholder="Digite o CPF ">
            </div>
            <div class="form-group">
                <label for="dataInicio">Data Inicio</label>
                <input class="form-control" type="date" id="dataInicio" name="dataInicio">
            </div>
			<div class="form-group">
                <label for="dataFim">Data Término</label>
                <input class="form-control" type="date" id="dataFim" name="dataFim" placeholder="Digite a identidade ">
            </div>
			<div class="form-group">
                <label for="cargo">Cargo</label>
                <input class="form-control" type="text" id="cargo" name="cargo" placeholder="Digite o numero da CTPS">
            </div>
			<div class="form-group">
                <label for="cbo">CBO</label>
                <input class="form-control" type="text" id="cbo" name="cbo" placeholder="Digite a serie ">
            </div>
			<div class="form-group">
                <label for="salario">Salário</label>
                <input class="form-control" type="text" id="salario" name="salario" p placeholder="Dgite o titulo de Eleitor">
            </div>
			<div class="form-group">
                <label for="jornada">Jornada</label>
                <input class="form-control" type="text" id="jornada" name="jornada" p placeholder="Dgite o titulo de Eleitor">
            </div>
			
			 <div class="form-check form-check-inline">
                 <label for="experiencia">Experiencia: </label>  
                <input class="form-check-input" type="radio" name="experiencia" id="sim" value="sim">
                <label class="form-check-label" for="experiencia">Sim</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="experiencia" id="nao" value="nao">
                <label class="form-check-label" for="experiencia">Não</label>
            </div>
			<div class="form-group">
                <label for="diasExperiencia">Dias de Experiência</label>
                <input class="form-control" type="text" id="diasExperiencia" name="diasExperiencia" placeholder="Dgite a rua">
            </div>
           
            <div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" value="sim" name="valeTransporte" id="valeTransporte">
			<label class="custom-control-label" for="valeTransporte">Vale Transporte</label>
			</div>
			<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" value="sim" name="periculosidade" id="periculosidade">
			<label class="custom-control-label" for="periculosidade">Periculosidade</label>
			</div>
			<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" value="sim" name="insalubridade" id="insalubridade">
			<label class="custom-control-label" for="insalubridade">Insalubridade</label>
			</div>
			<br>
           	<label for="tipo">Escala de Trabalho</label>
			<select class="form-select" name="escala" aria-label="tipo">
				<option selected>Selecionar</option>
				<option value="1">Escala 1</option>
				<option value="2">Escala 2</option>
				<option value="3">Escala 3</option>
			</select>
            <div class="form-group">
                <label for="regime">Regime</label>
                <input class="form-control" type="text" id="regime" name="regime" placeholder="Digite o Regime">
            </div>
            <div class="form-group">
                <label for="atividades">Atividades</label>
                <input class="form-control" type="text" id="atividades" name="atividades" placeholder="Digite as Atividades">
            </div>
            <div class="form-group">
                <label for="servico">Serviço</label>
                <input class="form-control" type="text" id="servico" name="servico" placeholder="Digite o Serviço">
            </div>
            <div class="form-group">
                <label for="rotinaPagamento">Rotina de Pagamento</label>
                <input class="form-control" type="text" id="rotinaPagamento" name="rotinaPagamento" placeholder="Digite a Rotina de Pagamento">
            </div>
            <div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" value="sim" name="ContribuicaoSindical" id="ContribuicaoSindical">
			<label class="custom-control-label" for="ContribuicaoSindical">Contribuição Sindical</label>
			</div>
            <div class="form-group">
                <label for="enderecoTrabalho">Endereço do Local de Trabalho</label>
                <input class="form-control" type="text" id="enderecoTrabalho" name="enderecoTrabalho" placeholder="Digite o Endereço do Local de Trabalho">
            </div>
            <div class="form-group">
                <label for="vigorContrato">Quando o Contrato Entra em Vigor</label>
                <input class="form-control" type="date" id="vigorContrato" name="vigorContrato">
            </div>
            <div class="form-group">
                <label for="regiaoRecrutar">Região do Recrutamento</label>
                <input class="form-control" type="text" id="regiaoRecrutar" name="regiaoRecrutar" placeholder="Digite a Região do Recrutamento">
            </div>
            <div class="form-group">
                <label for="prazoRecrutamento">Prazo de Recrutamento</label>
                <input class="form-control" type="date" id="prazoRecrutamento" name="prazoRecrutamento">
            </div>
            <div class="form-group">
                <label for="multaRecrutamento">Multa do Recrutamento</label>
                <input class="form-control" type="text" id="multaRecrutamento" name="multaRecrutamento" placeholder="Digite a Multa do Recrutamento">
            </div>
            <div class="form-group">
                <label for="multaVinculo">Multa do Vinculo</label>
                <input class="form-control" type="text" id="multaVinculo" name="multaVinculo" placeholder="Digite a Multa do Vinculo">
            </div>
            <div class="form-group">
                <label for="foro">Tipo de Foro</label>
                <input class="form-control" type="text" id="foro" name="foro" placeholder="Digite o Tipo de Foro">
            </div>
            <div class="form-group">
                <label for="numOrdem">Número da Ordem</label>
                <input class="form-control" type="text" id="numOrdem" name="numOrdem" placeholder="Digite o Número da Ordem">
            </div>
            <div class="form-group">
                <label for="numMatricula">Número da Matricula</label>
                <input class="form-control" type="text" id="numMatricula" name="numMatricula" placeholder="Digite o Número da Matricula">
            </div>
            <div class="form-group">
                <label for="autenticacao">Número da Autenticação</label>
                <input class="form-control" type="text" id="autenticacao" name="autenticacao" placeholder="Digite o Número da Autenticação">
            </div>
            <div class="form-group">
                <label for="secao">Número da seção</label>
                <input class="form-control" type="text" id="secao" name="secao" placeholder="Digite o Número da seção">
            </div>
            <div class="form-group">
                <label for="salarioInicial">Salário Inicial</label>
                <input class="form-control" type="text" id="salarioInicial" name="salarioInicial" placeholder="Digite o Salário Inicial">
            </div>
            <div class="form-group">
                <label for="comissao">Comissão</label>
                <input class="form-control" type="text" id="comissao" name="comissao" placeholder="Digite a Comissão">
            </div>
            <div class="form-group">
                <label for="tarefa">Tarefa</label>
                <input class="form-control" type="text" id="tarefa" name="tarefa" placeholder="Digite a Tarefa">
            </div>
            <div class="form-group">
                <label for="entradaTrabalho">Horário de Entrada do Trabalho</label>
                <input class="form-control" type="text" id="entradaTrabalho" name="entradaTrabalho" placeholder="Digite o Horário de Entrada no Trabalho">
            </div>
            <div class="form-group">
                <label for="refeicao">Horário da Refeição</label>
                <input class="form-control" type="text" id="refeicao" name="refeicao" placeholder="Digite o Horário da Refeição">
            </div>
            <div class="form-group">
                <label for="saidaTrabalho">Horário de Saida do Trabalho</label>
                <input class="form-control" type="text" id="saidaTrabalho" name="saidaTrabalho" placeholder="Digite o Horário de Saida do Trabalho">
            </div>
            <div class="form-group">
                <label for="descansoSemanal">Descanso Semanal</label>
                <input class="form-control" type="text" id="descansoSemanal" name="descansoSemanal" placeholder="Digite o Descanso Semanal">
            </div>
            <div class="form-group">
                <label for="fgts">FGTS</label>
                <input class="form-control" type="text" id="fgts" name="fgts" placeholder="Digite o FGTS">
            </div>
		   
            <br><br>
            <input  class="btn btn-primary" name="salvar" type="submit" value="Salvar">
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>