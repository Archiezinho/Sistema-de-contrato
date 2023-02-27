<?php

$pagina = "<html>
<body>
<p style=text-align:center;><strong>FICHA DO SALÁRIO FAMÍLIA</strong></p>
<p style=font-size:12px;>Empresa: <strong>$nomeEmpresa</strong></p>
<p style=font-size:12px;>Endereço: <strong>$enderecoEmpresa</strong></p><br>
<table style=width:100%;>
    <tr>    
        <td style=width:60%;>
            <p style=font-size:12px;>Empregado: <strong>$nomeFuncionario</strong></p>
        </td>
        <td style=width:20%;>
            <p style=font-size:12px;>N° CTPS: <strong>$ctps</strong></p>
        </td>
        <td style=width:20%;>
            <p style=font-size:12px;>Série: <strong>$serie</strong></p>
        </td>
    </tr>
</table>
<table style=width:100%;>
    <tr>
        <td style=width:50%;>
            <p style=font-size:12px;>Data de Admissão: <strong>$dataAdmissao</strong></p>
        </td>
        <td style=width:50%;>
            <p style=font-size:12px;>Data da Cessação da Relação de Emprego: <strong>$dataCessacao</strong></p>
        </td>
    </tr>
</table>
<table style=width:100%;border:1;>
<tr>
<td style=text-align:center;border:1;width:10%;>
    <p style=font-size:12px;>N° de Ordem</p>
</td>
<td style=text-align:center;border:1;width:35%;>
    <p style=font-size:12px;>Nome do Filho</p>
</td>
<td style=text-align:center;border:1;width:15%;>
    <p style=font-size:12px;>Data de Nascimento</p>
</td>
<td style=text-align:center;border:1;width:20%;>
    <p style=font-size:12px;>Local de Nascimento</p>
</td>
<td style=text-align:center;border:1;width:20%;>
    <p style=font-size:12px;>Cartório</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$numOrdem1</strong><br>............</p>
    <p><strong>$numOrdem2</strong><br>............</p>
    <p><strong>$numOrdem3</strong><br>............</p>
    <p><strong>$numOrdem4</strong><br>............</p>
    <p><strong>$numOrdem5</strong><br>............</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$nomeDependente1</strong><br>............................................</p>
    <p><strong>$nomeDependente2</strong><br>............................................</p>
    <p><strong>$nomeDependente3</strong><br>............................................</p>
    <p><strong>$nomeDependente4</strong><br>............................................</p>
    <p><strong>$nomeDependente5</strong><br>............................................</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$dataNascimento1</strong><br>...................</p>
    <p><strong>$dataNascimento2</strong><br>...................</p>
    <p><strong>$dataNascimento3</strong><br>...................</p>
    <p><strong>$dataNascimento4</strong><br>...................</p>
    <p><strong>$dataNascimento5</strong><br>...................</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$localNascimento1</strong><br>.........................</p>
    <p><strong>$localNascimento2</strong><br>.........................</p>
    <p><strong>$localNascimento3</strong><br>.........................</p>
    <p><strong>$localNascimento4</strong><br>.........................</p>
    <p><strong>$localNascimento5</strong><br>.........................</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$cartorio1</strong><br>.........................</p>
    <p><strong>$cartorio2</strong><br>.........................</p>
    <p><strong>$cartorio3</strong><br>.........................</p>
    <p><strong>$cartorio4</strong><br>.........................</p>
    <p><strong>$cartorio5</strong><br>.........................</p>
</td>
</tr>
</table>
<table style=width:100%;border:1;>
<tr>
<td style=text-align:center;border:1;width:10%;>
    <p style=font-size:12px;>n° de Registro</p>
</td>
<td style=text-align:center;border:1;width:10%;>
    <p style=font-size:12px;>N° do Livro</p>
</td>
<td style=text-align:center;border:1;width:10%;>
    <p style=font-size:12px;>N° da Folha</p>
</td>
<td style=text-align:center;border:1;width:15%;>
    <p style=font-size:12px;>Data de Entrega Certidão</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>Baixa</p>
</td>
<td style=text-align:center;border:1;width:30%;>
    <p style=font-size:12px;>Visto da Fiscalização</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$numRegistro1</strong><br>............</p>
    <p><strong>$numRegistro2</strong><br>............</p>
    <p><strong>$numRegistro3</strong><br>............</p>
    <p><strong>$numRegistro4</strong><br>............</p>
    <p><strong>$numRegistro5</strong><br>............</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$numLivro1</strong><br>............</p>
    <p><strong>$numLivro2</strong><br>............</p>
    <p><strong>$numLivro3</strong><br>............</p>
    <p><strong>$numLivro4</strong><br>............</p>
    <p><strong>$numLivro5</strong><br>............</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$numFolha1</strong><br>............</p>
    <p><strong>$numFolha2</strong><br>............</p>
    <p><strong>$numFolha3</strong><br>............</p>
    <p><strong>$numFolha4</strong><br>............</p>
    <p><strong>$numFolha5</strong><br>............</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$dataCertidao1</strong><br>...................</p>
    <p><strong>$dataCertidao2</strong><br>...................</p>
    <p><strong>$dataCertidao3</strong><br>...................</p>
    <p><strong>$dataCertidao4</strong><br>...................</p>
    <p><strong>$dataCertidao5</strong><br>...................</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$baixa1</strong><br>...............................</p>
    <p><strong>$baixa2</strong><br>...............................</p>
    <p><strong>$baixa3</strong><br>...............................</p>
    <p><strong>$baixa4</strong><br>...............................</p>
    <p><strong>$baixa5</strong><br>...............................</p>
</td>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$visto1</strong><br>.....................................</p>
    <p><strong>$visto2</strong><br>.....................................</p>
    <p><strong>$visto3</strong><br>.....................................</p>
    <p><strong>$visto4</strong><br>.....................................</p>
    <p><strong>$visto5</strong><br>.....................................</p>
</td>
</tr>
</table>
<table style=width:100%;border:1;>
<tr>
<td colspan=4 style=text-align:center;border:1;width:100%;>
    <p style=font-size:12px;>Evolução do salário Família</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>Competência Inicial</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>Valor Dependente</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>Quantidade de Dependentes</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>Valor Total</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$competenciaInicial</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$valorDependente</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$quantidadeDependente</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$valorTotal</strong><br>...............................</p>
</td>
</tr>
</table>
<br>
<br>
<br>
<table style=width:100%;>
    <tr>
        <td style=width:50%;>
            <p style=font-size:12px;>Data de Rescisão: ________/_________/________</p>
        </td>
        <td style=width:50%;text-align:center;>
            <p style=font-size:12px;>____________________________________________<br>Assinatura</p>
        </td>
    </tr>
</table>
</body>
</html>";

?>