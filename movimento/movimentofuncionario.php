<?php
session_start();
require '../classes/conexao.php';
require_once 'procedimentos.php';
require_once '../classes/funcionario.php';


if(isset($_POST['nome'])){
$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$identidade=$_POST['identidade'];
$sexo=$_POST['sexo'];
$CTPS=$_POST['CTPS'];
$serie=$_POST['serie'];
$titulo=$_POST['titulo'];	
$CNH=$_POST['CNH'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$pais=$_POST['pais'];
$telefone=$_POST['telefone'];
$estadoCivil=$_POST['estadocivil'];
$escolaridade=$_POST['escolaridade'];
$registro=$_POST['registro'];
$certidao=$_POST['certidao'];
$certificado=$_POST['certificado'];
$filhos=$_POST['filhos'];
$email=$_POST['email'];
$status="Ativo";
$dependentes=$_POST['dependentes'];
$nacionalidade=$_POST['nacionalidade'];
$cep=$_POST['cep'];
$setor=$_POST['setor'];
$nomePai=$_POST['nomePai'];
$nomeMae=$_POST['nomeMae'];
$reservista=$_POST['reservista'];
$categoria=$_POST['categoria'];
$cadastroPis=$_POST['cadastroPis'];
$numCadastroPis=$_POST['numCadastroPis'];

$foto = $_FILES['foto'];

    $dir = '../imagens/fotos/';

    $foto['foto'] = $cpf.'.jpg';

    if(move_uploaded_file($foto['tmp_foto'], "$dir".$foto['foto'])){
        $foto = "'$foto'['tmp_foto'], '$dir'.'$foto'['foto']";
    }else{
        echo 'Erro, o arquivo não atende os requisitos';
    }

$A = new funcionario($cod, $nome, $cpf, $identidade, $sexo, $CTPS, $serie, $titulo, $CNH, $rua, $numero, $bairro, $cidade, $estado,$pais, $telefone, $estadoCivil, $escolaridade, $registro, $certidao, $certificado, $filhos, $email, $status, $dependentes, $nacionalidade, $cep, $setor, $nomePai, $nomeMae, $reservista, $categoria, $foto, $cadastroPis, $numCadastroPis);
echo "achei"; 


}






$delete = isset($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";
$mudar = isset($_POST['mudar']) ? $_POST['mudar'] : "";

if ($delete) {
    $A->deletar($conexao,$codigo);
    $_SESSION['msg'] = "<div class='alert alert-success'>Funcionario /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaFuncionario.php';</script>");
}


if ($salvar) {

    $A->insere($conexao);
    $_SESSION['msg'] = "<div class='alert alert-success'>Funcionario cadastrado com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../cadastroFuncionario.php';</script>");
}
if ($mudar) {
    $A->atualizasenha($codigo, $link);
    $_SESSION['msg'] = "<div class='alert alert-success'>Senha atualizada com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../index.php';</script>");
}
