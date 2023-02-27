<?php
session_start();
require '../classes/conexao.php';
require_once 'procedimentos.php';
require_once '../classes/emrpesa.php';

$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";

if(isset($_POST['salvar'])or isset($_POST['alterar'])){

$razao=$_POST['razao'];
$nome=$_POST['nome'];
$CNPJ=$_POST['cnpj'];
$inscricao=$_POST['inscricao'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$estado=$_POST['estado'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$responsavel=$_POST['responsavel'];
$naturezaJuridica=$_POST['naturezaJuridica'];
$A = new empresa($cod,$razao,$nome,$CNPJ, $inscricao, $rua,$numero, $bairro,$estado,$telefone,$email,$responsavel,$naturezaJuridica);
echo "achei"; 

}






$delete = isset($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";

if ($delete) {
	$A = new empresa("","","","","","","","","","","","");
    $A->deletar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Empresa /Excluida com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaEmpresa.php';</script>");
}


if ($salvar) {
   
	$A->insere($conexao);
    $_SESSION['msg'] = "<div class='alert alert-success'>Empresa cadastrada com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../cadastroEmpresa.php';</script>");
}
if ($alterar) {
	$A->alterar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Dados atualizados com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaEmpresa.php';</script>");
}
