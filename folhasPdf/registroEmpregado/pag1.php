<?php

$pag1 = "
<html>
<body>
    <p style=text-align:center;><strong>REGISTRO DE EMPREGADOS</strong></p>
    <table style=width:100%;>
        <tr>
            <td>
                <p><strong>$nomeEmpresa</strong></p>
                <p>...........................................................................</p>
            </td>
            <td>
                <p><strong>$enderecoEmpresa</strong></p>
                <p>...........................................................................</p>
            </td>
        </tr>
        <tr>
            <td style=text-align:center;>
                <p style=font-size:8px;>EMPREGADOR</p>
            </td>
            <td style=text-align:center;>
                <p style=font-size:8px;>ENDEREÇO</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td style=text-align:center;border:1;width:10%;>
                <p style=font-size:10px;>NÚMERO DE ORDEM</p>
            </td>
            <td style=text-align:center;border:1;padding:5 5 0 5;width:10%;>
                <p style=font-size:12px;><strong>$numOrdem</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;width:10%;>
                <p style=font-size:10px;>NOME:</p>
            </td>
            <td style=text-align:center;border:1;padding:5 5 0 5;width:40%;>
                <p style=font-size:12px;><strong>$nomeFuncionario</strong><br>................................................................................................</p>
            </td>
            <td style=text-align:center;border:1;width:10%;>
                <p style=font-size:10px;>NÚMERO DE MATRÍCULA:</p>
            </td>
            <td style=text-align:center;border:1;padding:5 5 0 5;>
                <p style=font-size:12px;><strong>$numMatricula</strong></p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td style=text-align:center;border:1;width:10%;>
                <p style=font-size:10px;>FILIAÇÃO:</p>
            </td>
            <td style=border:1;padding:5 5 0 5;>
                <p style=font-size:12px;>Pai- <strong>$nomePai</strong><br>......................................................................................................................................</p>
                <p style=font-size:12px;>Mãe- <strong>$nomeMae</strong><br>......................................................................................................................................</p>
            </td>
            <td style=border:1;width:20%;text-align:center;>
                <p style=font-size:12px;><strong>$autenticacao</strong><br><br><br>AUTENTICAÇÃO</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td style=text-align:center;border:1;width:16%;>
             <p style=font-size:10px;>CTPS</p>
            </td>
            <td style=text-align:center;border:1;width:16%;>
                <p style=font-size:10px;>SÉRIE</p>
            </td>
            <td style=text-align:center;border:1;width:16%;>
                <p style=font-size:10px;>CERT. DE RESERVISTA</p>
            </td>
            <td style=text-align:center;border:1;width:16%;> 
                <p style=font-size:10px;>CATEGORIA</p>
            </td>
            <td style=text-align:center;border:1;width:16%;>
                <p style=font-size:10px;>TÍTULO DE ELEITOR</p>
            </td>
            <td rowspan=4 style=border:1;text-align:center;>
                <img src=$foto/>
                <p style=font-size:10px;>FOTO</p>
            </td>
        </tr>
        <tr>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$ctps</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$serie</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$reservista</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$categoria</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$tituloEleitor</strong><br>...............</p>
            </td>
        </tr>
        <tr>
            <td style=text-align:center;border:1;>
                <p style=font-size:10px;>DATA DO NASCIMENTO</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:10px;>NACIONALIDADE</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:10px;>ESTADO CIVIL</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:10px;>LOCAL DO NASCIMENTO</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:10px;>ESTADO</p>
            </td>
        </tr>
        <tr>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$nascimento</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$nacionalidade</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$estadoCivil</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$localNascimento</strong><br>...............</p>
            </td>
            <td style=text-align:center;border:1;>
                <p style=font-size:12px;><strong>$estado</strong><br>...............</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td style=width:24%;>
                <p style=font-size:10px;>QUANDO ESTRANGEIRO:</p>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p style=font-size:10px;>DATA QUE CHEGOU AO BRASIL:</p>
            </td>
            <td>
                <p style=font-size:12px;><strong>$dataEstrangeiro</strong><br>...............</p>
            </td>
            <td style=width:10%;>
                <p style=font-size:10px;>N⁰ CARTEIRA</p>
            </td>
            <td>
            <p style=font-size:12px;><strong>$carteiraEstrangeiro</strong><br>...............</p>
            </td>
            <td style=width:15%;>
                <p style=font-size:10px;>É NATURALIZADO?</p>
            </td>
            <td>
                <p style=font-size:12px;><strong>$naturalizado</strong><br>...............</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style=font-size:10px;>É CASADO COM BRASILEIRA?</p>
            </td>
            <td>
                <p style=font-size:12px;><strong>$casadoBrasileira</strong><br>...............</p>
            </td>
            <td>
                <p style=font-size:10px;>TEM FILHOS BRASILEIROS?</p>
            </td>
            <td>
                <p style=font-size:12px;><strong>$filhosBrasileiros</strong><br>...............</p>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td style=width:10%;border:1;text-align:center;>
                <p style=font-size:10px;>ENDEREÇO</p>
            </td>
            <td style=width:40%;border:1;>
                <p style=font-size:12px;><strong>$enderecoFuncionario</strong><br>..............................................................................</p>
            </td>
            <td style=width:10%;border:1;text-align:center;>
                <p style=font-size:10px;>MUDANÇA DE ENDEREÇO</p>
            </td>
            <td style=width:40%;border:1;>
                <p style=font-size:12px;><strong>$enderecoFuncionario2</strong><br>.............................................................................</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;text-align:center;>
                <p style=font-size:10px;>MUDANÇA DE ENDEREÇO</p>
            </td>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$enderecoFuncionario3</strong><br>.............................................................................</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:10px;>MUDANÇA DE ENDEREÇO</p>
            </td>
            <td style=border:1;>
            <p style=font-size:12px;><strong>$enderecoFuncionario4</strong><br>.............................................................................</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td rowspan=6 style=text-align:center;width:10%;>
                <p style=font-size:10px;>D<br>E<br>P<br>E<br>N<br>D<br>E<br>N<br>T<br>E<br>S</p>
            </td>
            <td style=border:1;text-align:center;width:35%;>
                <p style=font-size:10px;>NOME</p>
            </td>
            <td style=border:1;text-align:center;width:40%;>
                <p style=font-size:10px;>ENDEREÇO</p>
            </td>
            <td style=border:1;text-align:center;width:15%;>
                <p style=font-size:10px;>PARENTESCO</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$nomeDependente1</strong><br>...................................................................</p>
            </td>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$enderecoDependente1</strong><br>.............................................................................</p>
            </td>
            <td style=border:1;text-align:center;>
            <p style=font-size:12px;><strong>$parentescoDependente1</strong><br>...............</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$nomeDependente2</strong><br>...................................................................</p>
            </td>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$enderecoDependente2</strong><br>.............................................................................</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$parentescoDependente2</strong><br>...............</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$nomeDependente3</strong><br>...................................................................</p>
            </td>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$enderecoDependente3</strong><br>.............................................................................</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$parentescoDependente3</strong><br>...............</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$nomeDependente4</strong><br>...................................................................</p>
            </td>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$enderecoDependente4</strong><br>.............................................................................</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$parentescoDependente4</strong><br>...............</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$nomeDependente5</strong><br>...................................................................</p>
            </td>
            <td style=border:1;>
                <p style=font-size:12px;><strong>$enderecoDependente5</strong><br>.............................................................................</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$parentescoDependente5</strong><br>...............</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>DATA DE ADMISSÃO</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>DATA DE REGISTRO</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>NATUREZA DO CARGO</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>SEÇÃO</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>SALÁRIO INICIAL</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>COMISSÕES</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>TAREFA</p>
            </td>
            <td style=border:1;text-align:center;width:10%;>
                <p style=font-size:10px;>FORMA DE PAGAMENTO</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$dataAdmissao</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$dataRegistro</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$naturezaCargo</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$secao</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$salarioInicial</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$comissoes</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$tarefa</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$formaPagamento</strong><br>...............</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;border:1;>
        <tr>
            <td colspan=4 style=text-align:center;>
                <p style=font-size:10px;>HORÁRIO DE TRABALHO</p>
            <td style=border:1;text-align:center;width:20%;>
                <p style=font-size:10px;>CADASTRO PESSOA FÍSICA (CPF)</p>
            </td>
            <td style=border:1;text-align:center;width:24%;>
                <p style=font-size:10px;>PROGRAMA DE INTEGRAÇÃO SOCIAL (PIS)</p>
            </td>
        </tr>
        <tr>
            <td style=border:1;text-align:center;width:14%;>
                <p style=font-size:10px;>ENTRADA</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:10px;>REFEIÇÃO</p>
            </td>
            <td style=border:1;text-align:center;width:14%;>
                <p style=font-size:10px;>SAÍDA</p>
            </td>
            <td style=border:1;text-align:center;width:14%;>
                <p style=font-size:10px;>DESCANSO SEMANAL</p>
            </td>
            <td rowspan=2 style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$cpf</strong><br>...............</p>
            </td>
            <td rowspan=2 style=border:1;text-align:center;>
                <p style=font-size:10px;>CADASTRO EM $cadastroPis</p>
                <p style=font-size:10px;>SOB N⁰<br><strong style=font-size:12px;border:1;>$numCadastroPis</strong></p>
            </td>
        </tr>
        <tr>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$entradaTrabalho</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$refeicao</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$saidaTrabalho</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;>
                <p style=font-size:12px;><strong>$descansoSemanal</strong><br>...............</p>
            </td>
        </tr>
    </table>
    <table style=width:60%;border:1;>
        <tr>
            <td style=border:1;text-align:center;width:50%;>
                <p style=font-size:10px;>LOCAL DE TRABALHO<strong style=font-size:12px;>$localTrabalho</strong><br>...............</p>
            </td>
            <td style=border:1;text-align:center;width:50%;>
                <p style=font-size:10px;>IDENTIFICAÇÃO DA CONTA DO FGTS - N⁰<br><strong style=font-size:12px;>$identificacaoFgts</strong><br>...............</p>
            </td>
        </tr>
    </table>
    <table style=width:100%;>
        <tr>
            <td style=border:1;text-align:center;width:30%;padding:10;>
                <p style=font-size:10px;>DATA DE SAÍDA: ......./......./.......</p>
            </td>
            <td style=width:40%;>
            </td>
            <td style=text-align:center;width:30%;>
                <p style=font-size:10px;>______________________________________<br>ASSINATURA DO EMPREGADO</p>
            </td>
        </tr>
    </table>";

?>