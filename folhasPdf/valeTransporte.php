<?php

session_start();
include ('../pdf/mpdf.php');
require '../classes/conexao.php';
require '../movimento/movimentoGerador.php';

include ('valeTransporte/pagina.php');

/*
variáveis:

vale-transporte:

$transporteResidenciaTrabalho1
$precoResidenciaTrabalho1
$transporteTrabalhoResidencia1
$precoTrabalhoResidencia1
$transporteResidenciaTrabalho2
$precoResidenciaTrabalho2
$transporteTrabalhoResidencia2
$precoTrabalhoResidencia2
$transporteResidenciaTrabalho3
$precoResidenciaTrabalho3
$transporteTrabalhoResidencia3
$precoTrabalhoResidencia3
$transporteResidenciaTrabalho4
$precoResidenciaTrabalho4
$transporteTrabalhoResidencia4
$precoTrabalhoResidencia4

contrato:

$cargo = $contrato['cargo'];

registro:

$horario
$repouso

empresa:

$nomeEmpresa = $empresa['nome'];

funcionario:

$nomeFuncionario = $funcionario['nome'];
$enderecoFuncionario = $funcionario['bairro'] + $funcionario['rua'] + $funcionario['numero'];
$municipio = $funcionario['cidade'];
$bairro = $funcionario['bairro'];
$cep = $funcionario['cep'];
$telefone = $funcionario['telefone'];
$setor = $funcionario['setor'];
$cpf = $funcionario['cpf'];
*/

$arquivo = "ValeTransporte.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);


$mpdf->Output("$arquivo", 'I');



// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
