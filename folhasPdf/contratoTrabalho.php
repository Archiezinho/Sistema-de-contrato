<?php
session_start();
include ('../pdf/mpdf.php');
require '../classes/conexao.php';
require '../movimento/movimentoGerador.php';


include ('contratoTrabalho/clausula5JornadaNormal.php');
include ('contratoTrabalho/clausula5JornadaMenor26hr.php');
include ('contratoTrabalho/clausula5JornadaAte30hr.php');
include ('contratoTrabalho/clausula5PrazoIntermitente.php');
include ('contratoTrabalho/clausula5Jornada12hr.php');
include ('contratoTrabalho/clausula5RegimePresencial.php');
include ('contratoTrabalho/clausula6RegimePresencial.php');
include ('contratoTrabalho/clausula6RegimeTeletrabalho.php');
include ('contratoTrabalho/clausula8PrazoDeterminadoEContratoExperiencia.php');
include ('contratoTrabalho/clausula8PrazoDeterminadoETransitoridadeServico.php');
include ('contratoTrabalho/clausula8PrazoIndeterminado.php');
include ('contratoTrabalho/clausula8PrazoIntermitente.php');
include ('contratoTrabalho/clausula13PrazoIndeterminado.php');
include ('contratoTrabalho/clausula13PrazoDeterminado.php');
include ('contratoTrabalho/clausula13PrazoIntermitente.php');
include ('contratoTrabalho/pagina.php');

/*
variáveis:

contrato:

$regime = $contrato['regime'];
$prazo = $contrato['tipo'];
$porfissaoFuncionario = $contrato['cargo'];
$servico = $contrato['servico'];
$atividades = $contrato['atividades'];
$rotinaPagamento = $contrato['rotinaPagamento'];
$salario = $contrato['salario'];
$tipoPagamento
$contribuicaoSindical: = $contrato['contribuicaoSindical'];
$jornada = $contrato['jornada'];
$enderecoTrabalho = $contrato['enderecoTrabalho'];
$vigorContrato = $contrato['vigorContrato'];
$prazoInicio = $contrato['dataInicio'];
$prazoFinal = $contrato['dataFim'];
$regiaoRecrutar = $contrato['regiaoRecrutar'];
$prazoRecrutamento = $contrato['prazoRecrutamento'];
$multaRecrutamento = $contrato['multaRecrutamento'];
$multaVinculo = $contrato['multaVinculo'];
$foro = $contrato['foro'];

funcionario:

$nomeFuncionario = $funcionario['nome'];
$nacionalidadeFuncionario = $funcionario['nacionalidade'];
$estadoCivilFuncionario = $funcionario['estadoCivil'];
$cpfFuncionario = $funcionario['cpf'];
$ctpsFuncionario = $funcionario['CTPS'];
$serieCtpsFuncionario = $funcionario['serie'];
$enderecoFuncinario = $funcionario['bairro'] + $funcionario['rua'] + $funcionario['numero'];

empresa:

$nomeEmpresa = $empresa['nome'];
$razaoSocial = $empresa['razao'];
$naturezaJuridica = $empresa['naturezaJuridica'];
$enderecoEmpresa = $empresa['bairro'] + $empresa['numero'] + $empresa['rua'];

empregador->

$cpfEmpregador
$rgEmpregador
$emissorRg
*/

if($regime != "Presencial"){
    $clausula5RegimePresencial = "";
    $clausula6RegimePresencial = "";
}
if($regime != "Teletrabalho"){
    $clausula6RegimeTeletrabalho = "";
}
if($prazo != "Determinado"){
    $clausula8PrazoDeterminadoEContratoExperiencia = "";
    $clausula8PrazoDeterminadoETransitoridadeServico = "";
    $clausula13PrazoDeterminado = "";
}
if($prazo != "Indeterminado"){
    $clausula8PrazoIndeterminado = "";
    $clausula13PrazoIndeterminado = "";
}
if($prazo != "Intermitente"){
    $clausula5PrazoIntermitente = "";
    $clausula8PrazoIntermitente = "";
    $clausula13PrazoIntermitente = "";
}
if($jornada = 8){
    $clausula5JornadaNormal = "";
}
if($jornada < 30 || $jornada > 12){
    $clausula5JornadaAte30hr = "";
    if($jornada < 26){
        $clausula5JornadaMenor26hr = "";
    }  
}
else if($jornada = 12){
    $clausula5Jornada12hr = "";
}

$arquivo = "ContratoDeTrabalho.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);


$mpdf->Output("$arquivo", 'I');



// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
