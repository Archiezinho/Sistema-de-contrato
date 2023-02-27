<?php
session_start();
require '../classes/conexao.php';
require_once 'procedimentos.php';
require_once '../classes/contrato.php';

$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";

if($cod==""){
	
	$tipo= $_POST['tipo'];
	$codFuncionario= $_POST['codFuncionario'];
	$codEmpresa= $_POST['codEmpresa'];
	$dataInicio= $_POST['dataInicio'];
	$dataFim= $_POST['dataFim']==""? "0000-00-00":$_POST['dataFim'];
	$cargo= $_POST['cargo'];
	$cbo= $_POST['cbo'];
	$salario= $_POST['salario'];
	$jornada= $_POST['jornada'];
	$experiencia= $_POST['experiencia'];
	$diasExperiencia= $_POST['diasExperiencia'];
	$valeTransporte= $_POST['valeTransporte'];
	$periculosidade= $_POST['periculosidade'];
	$insalubridade= $_POST['insalubridade'];
	$escala= $_POST['escala'];
	$regime= $_POST['regime'];
	$atividades= $_POST['atividades'];
	$servico= $_POST['servico'];
	$rotinaPagamento= $_POST['rotinaPagamento'];
	$contribuicaoSindical= $_POST['contribuicaoSindical'];
	$enderecoTrabalho= $_POST['enderecoTrabalho'];
	$vigorContrato= $_POST['vigorContrato'];
	$regiaoRecrutar= $_POST['regiaoRecrutar'];
	$prazoRecrutamento= $_POST['prazoRecrutamento'];
	$multaRecrutamento= $_POST['multaRecrutamento'];
	$multaVinculo= $_POST['multaVinculo'];
	$foro= $_POST['foro'];
	$numOrdem= $_POST['numOrdem'];
    $numMatricula=$_POST['numMatricula'];
    $autenticacao= $_POST['autenticacao'];
    $secao= $_POST['secao'];
    $salarioInicial= $_POST['salarioInicial'];
    $comissoes= $_POST['comissoes'];
    $tarefa= $_POST['tarefa'];
    $entradaTrabalho= $_POST['entradaTrabalho'];
    $refeicao= $_POST['refeicao'];
    $saidaTrabalho= $_POST['saidaTrabalho'];
    $descansoSemanal= $_POST['descansoSemanal'];
    $fgts= $_POST['fgts'];

$A = new contrato($cod,$tipo,$codFuncionario,$codEmpresa,$dataInicio, $dataFim,$cargo,$cbo,$salario, $jornada,$experiencia,$diasExperiencia,$valeTransporte, $periculosidade,$insalubridade,$escala,$regime,$servico,$atividades,$rotinaPagamento,$tipoPagamento,$contribuicaoSindical,$enderecoTrabalho,$vigorContrato,$regiaoRecrutar,$prazoRecrutamento,$multaRecrutamento,$multaVinculo,$foro, $numOrdem, $numMatricula, $autenticacao, $secao, $salarioInicial, $comissoes, $tarefa, $entradaTrabalho, $refeicao, $saidaTrabalho, $descansoSemanal, $fgts);



}






$delete = isset($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";
$mudar = isset($_POST['mudar']) ? $_POST['mudar'] : "";

if ($delete) {
    $A->deletar($conexao,$codigo);
    $_SESSION['msg'] = "<div class='alert alert-success'>Contrato /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaContrato.php';</script>");
}


if ($salvar) {

    $A->insere($conexao);
	
    $_SESSION['msg'] = "<div class='alert alert-success'>Contrato cadastrado com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../cadastroContrato.php';</script>");
}
if ($mudar) {
    $A->atualizasenha($codigo, $link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Dados atualizados com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../index.php';</script>");
}
