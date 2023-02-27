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
    <h4 class="text-center text-dark pt-2">Cadastrar Dependentes  </h3>
        <form action="movimento/movimentoDependente.php" method="Post">

            <!-- caixas de texto -->
			<div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite o nome do funcionário">
            </div>
			<div class="form-group">
                <label for="nascimento">Data de Nascimento</label>
                <input class="form-control" type="date" id="nascimento" name="nascimento">
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
                <label for="codfuncionario">Cod Funcionário</label>
                <input class="form-control" type="text" id="codfuncionario" name="codfuncionario">
            </div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" value="sim" name="salariofamilia" id="salariofamilia">
			<label class="custom-control-label" for="salariofamilia">Salário Familia</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" value="sim" name="irrf" id="irrf">
			<label class="custom-control-label" for="irrf">IRRF</label>
			</div>
            <br>
            <div class="form-group">
                <label for="parentesco">Parentesco</label>
                <input class="form-control" type="text" id="parentesco" name="parentesco" placeholder="Digite o Parentesco">
            </div>
            <div class="form-group">
                <label for="numOrdem">Número da Ordem</label>
                <input class="form-control" type="text" id="numOrdem" name="numOrdem" placeholder="Digite o Número da Ordem">
            </div>
            <div class="form-group">
                <label for="localNascimento">local de Nascimento</label>
                <input class="form-control" type="text" id="localNascimento" name="localNascimento" placeholder="Digite o Local do Nascimento">
            </div>
            <div class="form-group">
                <label for="numRegistro">Número do Registro</label>
                <input class="form-control" type="text" id="numRegistro" name="numRegistro" placeholder="Digite o Número do Registro">
            </div>
            <div class="form-group">
                <label for="numLivro">Número do Livro</label>
                <input class="form-control" type="text" id="numLivro" name="numLivro" placeholder="Digite o Número do Livro">
            </div>
            <div class="form-group">
                <label for="numFolha">Número da Folha</label>
                <input class="form-control" type="text" id="numFolha" name="numFolha" placeholder="Digite o Número da Folha">
            </div>
            <div class="form-group">
                <label for="numFolha">Número da Folha</label>
                <input class="form-control" type="text" id="numFolha" name="numFolha" placeholder="Digite o Número da Folha">
            </div>
            <div class="form-group">
                <label for="dataCertidao">Data de Entrega da Certidão de Nascimento</label>
                <input class="form-control" type="date" id="dataCertidao" name="dataCertidao">
            </div>
            <div class="form-group">
                <label for="baixa">Baixa</label>
                <input class="form-control" type="text" id="baixa" name="baixa" placeholder="Digite a Baixa">
            </div>
            <div class="form-group">
                <label for="visto">Visto</label>
                <input class="form-control" type="text" id="visto" name="visto" placeholder="Digite o Visto">
            </div>
            <div class="form-group">
                <label for="competenciaInicial">Competência Inicial</label>
                <input class="form-control" type="text" id="competenciaInicial" name="competenciaInicial" placeholder="Digite a Competência Inicial">
            </div>
			
            <br>
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