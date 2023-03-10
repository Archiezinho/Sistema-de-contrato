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
    <h4 class="text-center text-dark pt-2">Cadastrar Empresa </h3>
        <form action="movimento/movimentoEmpresa.php" method="Post">

            <!-- caixas de texto -->
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
                <input class="form-control" type="text" id="nome" name="inscricao" placeholder="Digite a Inscricao Estadual">
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