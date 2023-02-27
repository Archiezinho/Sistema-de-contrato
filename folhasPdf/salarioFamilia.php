<?php

session_start();
include ('../pdf/mpdf.php');
require '../classes/conexao.php';
require '../movimento/movimentoGerador.php';

include ('salarioFamilia/pagina.php');

/*
variáveis:

salário família:

$competenciaInicial = $dependente['competenciaInicial'];
$valorDependente = $dependente['valorDependente'];
$quantidadeDependente = $funcionario['dependentes'];
$valorTotal

empresa:

$nomeEmpresa = $empresa['nome'];
$enderecoEmpresa $empresa['bairro'] + $empresa['rua'] + $empresa['numero'];

Funcionario:

$nomeFuncionario = $funcionario['nome'];
$ctps = $funcionario['CTPS'];
$serie = $funcionario['serie'];

dependentes:

$numOrdem1 = $dependente['numOrdem'];
$numOrdem2
$numOrdem3
$numOrdem4
$numOrdem5
$nomeDependente1 = $dependente['nome'];
$nomeDependente2
$nomeDependente3
$nomeDependente4
$nomeDependente5
$dataNascimento1 = $dependente['nascimento'];
$dataNascimento2
$dataNascimento3
$dataNascimento4
$dataNascimento5
$localNascimento1 = $dependente['localNascimento'];
$localNascimento2
$localNascimento3
$localNascimento4
$localNascimento5
$cartorio1 = $dependente['cartorio'];
$cartorio2
$cartorio3
$cartorio4
$cartorio5
$numRegistro1 = $dependente['numRegistro'];
$numRegistro2
$numRegistro3
$numRegistro4
$numRegistro5
$numLivro1 = $dependente['numLivro'];
$numLivro2
$numLivro3
$numLivro4
$numLivro5
$numFolha1 = $dependente['numFolha'];
$numFolha2
$numFolha3
$numFolha4
$numFolha5
$dataCertidao1 = $dependente['dataCertidao'];
$dataCertidao2
$dataCertidao3
$dataCertidao4
$dataCertidao5
$baixa1 = $dependente['baixa'];
$baixa2
$baixa3
$baixa4
$baixa5
$visto1 = $dependente['visto'];
$visto2
$visto3
$visto4
$visto5

contrato:

$dataAdmissao = $contrato['dataInicio'];
$dataCessacao = $contrato['dataFim'];
*/

$arquivo = "SalarioFamilia.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);


$mpdf->Output("$arquivo", 'I');



// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
