<?php
session_start();
require '../classes/conexao.php';
require_once 'procedimentos.php';
require_once '../classes/dependente.php';

$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";

if(isset($_POST['salvar'])or isset($_POST['alterar'])){


$nome=$_POST['nome'];
$nascimento=$_POST['nascimento'];
$sexo=$_POST['sexo'];
$codfuncionario=$_POST['codfuncionario'];
$salariofamilia=$_POST['salariofamilia'];
$irrf=$_POST['irrf'];
$parentesco=$_POST['parentesco'];
$numOrdem=$_POST['numOrdem'];
$localNascimento=$_POST['localNascimento'];
$numRegistro=$_POST['numRegistro'];
$numLivro=$_POST['numLivro'];
$numFolha=$_POST['numFolha'];
$dataCertidao=$_POST['dataCertidao'];
$baixa=$_POST['baixa'];
$visto=$_POST['visto'];
$competenciaInicial= $_POST['competenciaInicial'];

$A = new dependente($cod,$nome,$nascimento, $sexo,$codfuncionario,$salariofamilia, $irrf, $parentesco, $numOrdem, $localNascimento, $cartorio, $numRegistro, $numLivro, $numFolha, $dataCertidao, $baixa, $visto, $competenciaInicial);


}






$delete = isset($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";

if ($delete) {
	$A = new empresa("","","","","","","","","","","","");
    $A->deletar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Dependente /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaDependente.php';</script>");
}


if ($salvar) {
   	$A->insere($conexao);
    $_SESSION['msg'] = "<div class='alert alert-success'>Dependente cadastradado com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../cadastroDependente.php';</script>");
}
if ($alterar) {
	$A->alterar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Dados atualizados com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaEmpresa.php';</script>");
}
