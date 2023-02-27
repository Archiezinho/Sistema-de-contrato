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
    <h4 class="text-center text-dark pt-2">Consultar Funcionário  </h3>
	<div class="form-group">
            Pesquisar: <input type="text" class="form-control" id="busca" placeholder="Informe o Nome">
        </div>
	
        <form action="movimento/movimentoFuncionario.php" method="Post">
		<div class="form-group">
                <label for="codigo">Codigo</label>
                <input class="form-control" type="text" id="codigo" name="codigo">
            </div>

            <!-- caixas de texto -->
            <div class="form-group">
                <label for="nome">Codigo da Empresa:</label>
                <input class="form-control" type="text" id="codEmpresa" name="codEmpresa" placeholder="Digite o Código da Empresa">
            </div>
			<div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite o nome do funcionário">
            </div>
			<div class="form-group">
                <label for="cpf">CPF</label>
                <input class="form-control" type="text" id="cpf" name="cpf" placeholder="Digite o CPF ">
            </div>
            <div class="form-group">
                <label for="identidade">Identidade</label>
                <input class="form-control" type="text" id="identidade" name="identidade" placeholder="Digite a identidade ">
            </div>
			 <div class="form-check form-check-inline">
                 <label for="sexo">Sexo: </label>  
                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                <label class="form-check-label" for="sexo">Masculino</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                <label class="form-check-label" for="sexo">Feminino</label>
            </div>
			<div class="form-group">
                <label for="CTPS">CTPS</label>
                <input class="form-control" type="text" id="CTPS" name="CTPS" placeholder="Digite o numero da CTPS">
            </div>
			<div class="form-group">
                <label for="serie">Serie</label>
                <input class="form-control" type="text" id="serie" name="serie" placeholder="Digite a serie ">
            </div>
			<div class="form-group">
                <label for="titulo">Titulo de Eleitor</label>
                <input class="form-control" type="text" id="titulo" name="titulo" p placeholder="Dgite o titulo de Eleitor">
            </div>
            <div class="form-group">
                <label for="CNH">CNH</label>
                <input class="form-control" type="text" id="CNH" name="CNH" placeholder="Dgite o número da CNH">
				
            </div>
			<div class="form-group">
                <label for="rua">Rua</label>
                <input class="form-control" type="text" id="rua" name="rua" placeholder="Dgite a rua">
            </div>
			 <div class="form-group">
                <label for="numero">Numero</label>
                <input class="form-control" type="text" id="numero" name="numero" placeholder="Numero">
            </div>
			<div class="form-group">
                <label for="bairro">Bairro</label>
                <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input class="form-control" type="text" id="estado" name="estado" placeholder="Digite o Estado">
            </div>
			 <div class="form-group">
                <label for="pais">País</label>
                <input class="form-control" type="text" id="pais" name="pais" placeholder="Digite o Estado">
            </div>
			
			<div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control" type="text" id="telefone" name="telefone" onkeypress="$(this).mask('(00) 0000-00009')" placeholder="Digite o Telefone">
            </div>
			            <label for="estadocivil">Estado Civil:</label>  
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="solteiro" value="solteiro">
                <label class="form-check-label" for="solteiro">Solteiro</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="casado" value="casado">
                <label class="form-check-label" for="casado">casado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="viuvo" value="viuvo">
                <label class="form-check-label" for="viuvo">Viuvo</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="divorciado" value="divorciado">
                <label class="form-check-label" for="divorciado">Divorciado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estadocivil" id="outro" value="outro">
                <label class="form-check-label" for="outro">Outro</label>
            </div>
            <br><br>
			 <div class="form-group">
			  <label for="escolaridade">Escolaridade</label>
			<select class="form-select" name="escolaridade" aria-label="Escolaridade">
				<option selected>Selecionar</option>
				<option value="Fundamental">Fundamental</option>
				<option value="Medio">Medio</option>
				<option value="Superior">Superior</option>
				<option value="Pos-graduado">Pos-graduado</option>
			</select>
			</div>
			<div class="form-group">
                <label for="resgistro">Registro de Classe</label>
                <input class="form-control" type="text" id="registro" name="registro" placeholder="Digite seu registro">
            </div>
			
            <div class="form-group">
                <label for="certidao">Certidao</label>
                <input class="form-control" type="certidao" id="certidao" name="certidao" placeholder="Digite a certidao">
            </div>
			<div class="form-group">
                <label for="certificado">Certificado de Reservista</label>
                <input class="form-control" type="text" id="certidao" name="certificado" placeholder="Digite o certificado">
            </div>
			<div class="form-group">
                <label for="filhos">Filhos abaixo de 14 anos</label>
                <input class="form-control" type="text" id="filhos" name="filhos" placeholder="Digite quantos filhos">
            </div>
			<div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Digite seu email">
            </div>
           
			<div class="form-group">
                <label for="dependentes">Numero de Dependentes</label>
                <input class="form-control" type="text" id="dependentes" name="dependentes" placeholder="Digite o numero de Dependentes">
            </div>
            <div class="form-group">
                <label for="nacionalidade">Nacionalidade</label>
                <input class="form-control" type="text" id="nacionalidade" name="nacionalidade" placeholder="Digite a Nacionalidade">
            </div>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input class="form-control" type="text" id="cep" name="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group">
                <label for="setor">Setor</label>
                <input class="form-control" type="text" id="setor" name="setor" placeholder="Digite o Setor">
            </div>
            <div class="form-group">
                <label for="nomePai">Nome do Pai</label>
                <input class="form-control" type="text" id="nomePai" name="nomePai" placeholder="Digite o Nome do Pai">
            </div>
            <div class="form-group">
                <label for="nomeMae">Nome da Mãe</label>
                <input class="form-control" type="text" id="nomeMae" name="nomeMae" placeholder="Digite o Nome da Mãe">
            </div>
            <div class="form-group">
                <label for="reservista">Reservista</label>
                <input class="form-control" type="text" id="reservista" name="reservista" placeholder="Digite o Número da Reservista">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input class="form-control" type="text" id="categoria" name="categoria" placeholder="Digite a Categoria">
            </div>
            <div class="form-group">
                <label for="cadastroPis">Data de Cadastro do Pis</label>
                <input class="form-control" type="date" id="cadastroPis" name="cadastroPis">
            </div>
            <div class="form-group">
                <label for="numCadastroPis">Número do Pis</label>
                <input class="form-control" type="text" id="numCadastroPis" name="numCadastroPis" placeholder="Digite o Número do Pis">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
            
            <br>
            <input  class="btn btn-primary" name="alterar" type="submit" value="Alterar">
			<input  class="btn btn-primary" name="deletar" type="submit" value="Deletar">
			<input  class="btn btn-primary" name="ficha" type="submit" value="Emitir Ficha">
        </form>

</div>




<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom2.js"></script></body>
</body>
</html>