<?php
session_start();
require '../classes/conexao.php';

if(isset($_POST['codigo'])){
    $cod=$_POST['codigo'];
    $codEmpresa=$_POST['codEmpresa'];


    $sql = "SELECT * FROM funcionario WHERE cod='$cod'";

    $result = $conexao->query($sql);

    $funcionario = $result->fetch_assoc();

    $sql = "SELECT * FROM dependente WHERE codFuncionario='$cod'";

    $dependente = $result->fetch_assoc();

    $sql = "SELECT * FROM contrato WHERE codFuncionario='$cod'";

    $contrato = $result->fetch_assoc();

    $sql = "SELECT * FROM empresa WHERE codEmpresa='$codEmpresa'";

    $empresa = $result->fetch_assoc();


}



?>