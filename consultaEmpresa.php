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
    <h4 class="text-center text-dark pt-2">Consultar Empresa </h3>
		
		<div class="form-group">
            Pesquisar: <input type="text" class="form-control" id="busca" placeholder="Informe o Nome">
        </div>
        <form action="movimento/movimentoEmpresa.php" method="Post">

            <!-- caixas de texto -->
			<div class="form-group">
                <label for="nome">Codigo</label>
                <input class="form-control" type="text" id="codigo" name="codigo">
            </div>
            <div class="form-group">
                <label for="nome">Razao Social</label>
                <input class="form-control" type="text" id="razao" name="razao" placeholder="Digite Razão Social ">
            </div>
			<div class="form-group">
                <label for="nome">Nome Fantasia</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite o nome fantasia">
            </div>
			<div class="form-group">
                <label for="nome">CNPJ</label>
                <input class="form-control" type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ ">
            </div>
			<div class="form-group">
                <label for="nome">Inscrição Estadual</label>
                <input class="form-control" type="text" id="inscricao" name="inscricao" placeholder="Digite a Inscricao Estadual">
            </div>
            <div class="form-group">
                <label for="nome">Rua</label>
                <input class="form-control" type="text" id="rua" name="rua" placeholder="Endereço da Empresa">
				
            </div>
			 <div class="form-group">
                <label for="nome">Numero</label>
                <input class="form-control" type="text" id="numero" name="numero" placeholder="Numero">
            </div>
			<div class="form-group">
                <label for="nome">Bairro</label>
                <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="form-group">
                <label for="nome">Cidade</label>
                <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="nome">Estado</label>
                <input class="form-control" type="text" id="estado" name="estado" placeholder="Digite o Estado">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control" type="text" id="telefone" name="telefone" onkeypress="$(this).mask('(00) 0000-00009')" placeholder="Digite o Telefone">
            </div>
			<div class="form-group">
                <label for="responsavel">Reponsável	</label>
                <input class="form-control" type="text" id="responsavel" name="responsavel" placeholder="Digite o Reponsável">
            </div>
            <div class="form-group">
                <label for="naturezaJuridica">Natureza Jurídica	</label>
                <input class="form-control" type="text" id="naturezaJuridica" name="naturezaJuridica" placeholder="Digite a Natureza Jurídica">
            </div>
            
            <br>
            <input  class="btn btn-primary" name="alterar" type="submit" value="Alterar">
			<input  class="btn btn-primary" name="deletar" type="submit" value="Deletar">
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom1.js"></script>
</body>
