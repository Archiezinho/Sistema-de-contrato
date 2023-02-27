<?php

session_start();
include ('../pdf/mpdf.php');
require '../classes/conexao.php';
require '../movimento/movimentoGerador.php';

include ('registroEmpregado/pag1.php');
include ('registroEmpregado/pag2.php');
include ('registroEmpregado/pag3.php');

/*
variáveis:

registro:

$numOrdem = $contrato['numOrdem'];
$numMatricula = $contrato['numMatricula'];
$autenticacao = $contrato['autenticacao'];
$dataRegistro = $contrato['dataInicio'];
$naturezaCargo = $contrato['cargo'];
$secao = $contrato['secao'];
$salarioInicial = $contrato['salarioInicial'];
$comissoes = $contrato['comissoes'];
$tarefa = $contrato['tarefa'];
$entradaTrabalho = $contrato['entradaTrabalho'];
$refeicao = $contrato['refeicao'];
$saidaTrabalho = $contrato['saidaTrabalho'];
$descansoSemanal = $contrato['descansoSemanal'];
$identificacaoFgts = = $contrato['fgts'];

contrato:

$formaPagamento 
$localTrabalho = $contrato['enderecoTrabalho'];
$dataAdmissao = $contrato['dataInicio'];

funcionario:

$nomeFuncionario = $funcionario['nome'];
$nomePai = $funcionario['nomePai'];
$nomeMae = $funcionario['nomeMae'];
$ctps = $funcionario['CTPS'];
$serie = $funcionario['serie'];
$reservista = $funcionario['reservista'];
$categoria = $funcionario['categoria'];
$tituloEleitor = $funcionario['titulo'];
$nascimento = $funcionario['certidao'];
$nacionalidade = $funcionario['nacionalidade'];
$estadoCivil = $funcionario['estadoCivil'];
$localNascimento = $funcionario['nacionalidade'];
$estado
$foto = $funcionario['foto'];
$enderecoFuncionario = $funcionario['bairro'] + $funcionario['rua'] + $funcionario['numero'];
$enderecoFuncionario2
$enderecoFuncionario3
$enderecoFuncionario4
$cpf = $funcionario['cpf'];
$cadastroPis = $funcionario['cadastroPis'];
$numCadastroPis = $funcionario['numCadastroPis'];

estrangeiro->

$dataEstrangeiro
$carteiraEstrangeiro
$naturalizado
$casadoBrasileira
$filhosBrasileiros

dependentes:

$nomeDependente1 = $dependente['nome'];
$enderecoDependente1
$parentescoDependente1 = $dependente['parentesco'];
$nomeDependente2
$enderecoDependente2
$parentescoDependente2
$nomeDependente3
$enderecoDependente3
$parentescoDependente3
$nomeDependente4
$enderecoDependente4
$parentescoDependente4
$nomeDependente5
$enderecoDependente5
$parentescoDependente5

empresa:

$nomeEmpresa = $empresa['nome'];
$enderecoEmpresa = $empresa['bairro'] + $empresa['rua'] + $empresa['numero'];

*/

$pagina = "$pag1 $pag2 $pag3";
$arquivo = "RegistroDoEmpregado.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);


$mpdf->Output("$arquivo", 'I');



// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
