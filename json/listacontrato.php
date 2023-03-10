<?php 
// Dados da conexão com o banco de dados
require '../classes/conexao.php';

// Recebe os parâmetros enviados via GET
$acao = (isset($_GET['acao'])) ? $_GET['acao'] : '';
$parametro = (isset($_GET['parametro'])) ? $_GET['parametro'] : '';


// Verifica se foi solicitado uma consulta para o autocomplete
if($acao == 'autocomplete'):
	$where = (!empty($parametro)) ? 'WHERE nome LIKE ?' : '';
	$sql = "SELECT codFuncionario, codEmpresa FROM contrato " . $where;

	$stm = $conexao->prepare($sql);
	$stm->bindValue(1, '%'.$parametro.'%');
	$stm->execute();
	$dados = $stm->fetchAll(PDO::FETCH_OBJ);

	$json = json_encode($dados);
	echo $json;
endif;

// Verifica se foi solicitado uma consulta para preencher os campos do formulário
if($acao == 'consulta'):
	$sql = "SELECT * FROM contrato ";
	$sql .= "WHERE nome LIKE ? LIMIT 1";

	$stm = $conexao->prepare($sql);
	$stm->bindValue(1, $parametro.'%');
	$stm->execute();
	$dados = $stm->fetchAll(PDO::FETCH_OBJ);

	$json = json_encode($dados);
	echo $json;
endif;