<?php

$pagina = "
<html>
<body>
<table style=width:100%;border:1;>
<tr>
<td style=text-align:center;border:1;padding:10;>
<p><strong>$nomeEmpresa</strong></p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
<p><strong>Pedido para Concessão de Vale - Transporte</strong></p>
</td>
</tr>
</table>
<table style=width:100%;border:1;>
<tr>
<td>
<p>Interessado em receber o vale-transporte, declaro estar ciente da minha 
participação, referente ao desconto percentual que me cabe e que será 
discriminado no meu contracheque, conforme definido na lei 7.418/85, e também
ter conhecimento de falsas declarações ou o uso indevido dos vales-transportes, 
constituem falta grave, conforme previsto no parágrafo 3°, art° 7, capítulo II 
do decreto 95.247/87.</p>
</td>
</tr>
</table>
<table style=width:100%;border:1;>
<tr>
<td colspan=2 style=width:50%;>
<p style=font-size:12px;>Nome do Funcionário: <strong>$nomeFuncionario</strong></p>
</td>
</tr>
<tr>
<td colspan=2>
<p style=font-size:12px;>Endereço Residencial: <strong>$enderecoFuncionario</strong></p>
</td>
</tr>
<tr>
<td>
<p style=font-size:12px;>Município: <strong>$municipio</strong></p>
</td>
<td style=width:50%;>
<p style=font-size:12px;>Bairro: <strong>$bairro</strong></p>
</td>
</tr>
<tr>
<td>
<p style=font-size:12px;>CEP: <strong>$cep</strong></p>
</td>
<td>
<p style=font-size:12px;>Tel: <strong>$telefone</strong></p>
</td>
</tr>
<tr>
<td colspan=2>
<p style=font-size:12px;>Empresa: <strong>$nomeEmpresa</strong></p>
</td>
</tr>
<tr>
<td>
<p style=font-size:12px;>Setor: <strong>$setor</strong></p>
</td>
<td>
<p style=font-size:12px;>Cpf: <strong>$cpf</strong></p>
</td>
</tr>
<tr>
<td>
<p style=font-size:12px;>Horário: <strong>$horario</strong></p>
</td>
<td>
<p style=font-size:12px;>repouso: <strong>$repouso</strong></p>
</td>
</tr>
<tr>
<td>
<p style=font-size:12px;>Cargo: <strong>$cargo</strong></p>
</td>
<td>
</td>
</tr>
</table>
<p style=text-align:center;><strong>Pedido para Concessão de Vale - Transporte</strong></p>
<table style=width:100%;border:1;>
<tr>
<td colspan=2 style=text-align:center;border:1;width:100%;>
    <p style=font-size:12px;>DA RESIDÊNCIA PARA O TRABALHO</p>
</td>
<td colspan=2 style=text-align:center;border:1;width:100%;>
    <p style=font-size:12px;>DO TRABALHO PARA A RESIDÊNCIA</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>MEIO DE TRANSPORTE UTILIZADO</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>PREÇO DA PASSAGEM</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>MEIO DE TRANSPORTE UTILIZADO</p>
</td>
<td style=text-align:center;border:1;width:25%;>
    <p style=font-size:12px;>PREÇO DA PASSAGEM</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteResidenciaTrabalho1</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoResidenciaTrabalho1</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteTrabalhoResidencia1</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoTrabalhoResidencia1</strong><br>...............................</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteResidenciaTrabalho2</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoResidenciaTrabalho2</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteTrabalhoResidencia2</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoTrabalhoResidencia2</strong><br>...............................</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteResidenciaTrabalho3</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoResidenciaTrabalho3</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteTrabalhoResidencia3</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoTrabalhoResidencia3</strong><br>...............................</p>
</td>
</tr>
<tr>
<td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteResidenciaTrabalho4</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoResidenciaTrabalho4</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$transporteTrabalhoResidencia4</strong><br>...............................</p>
</td><td style=text-align:center;border:1;padding:10;>
    <p><strong>$precoTrabalhoResidencia4</strong><br>...............................</p>
</td>
</tr>
</table>
<table style=width:100%;border:1;>
<tr>
<td>
<p>Comprometo-me a utilizar o vale-transporte exclusivamente para os 
deslocamentos Residência - Trabalho - Residência, bem como manter as 
informações acima prestadas. Declaro, ainda, que as informações supra
são a expressão da verdade, ciente de que o erro nas mesmas, ou o uso 
indevido do vale-transporte, constituirá falta grave, ensejando punição
nos termos da legislação específica.</p>
</td>
</tr>
</table>
<table style=width:100%;>
<tr>
<td colspan=2>
<br>
<p>Obs.:<br><br> ________________________________________________________________________________________________________<br><br>
________________________________________________________________________________________________________<br><br>
Local ________________________________________________________Data __________/_____________/____________</p>
</td>
</tr>
<br><br>
<tr>
<td style=width:50%;text-align:center;>
<p>____________________________________________<br>EMPREGADO</p>
</td>
<td style=width:50%;text-align:center;>
<p>____________________________________________<br>EMPREGADOR</p>
</td>
</tr>
</table>
</body>
</html>";

?>