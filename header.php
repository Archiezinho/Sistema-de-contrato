<!DOCTYPE html>
<html lang="pt-br">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
        <!-- Font Awesome -->
       
        <title>menu</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>


        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- Logo -->
            <a href="menu.php" class="navbar-brand">Folha de Pagamento</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
                <ul class="navbar-nav ml-auto">
                    <?php
                    if ($_SESSION['perfil'] == 1) {
                        ?>

                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" 
                               data-toggle="dropdown">Usuarios</a>

                            <div class="dropdown-menu">
                                
                                <a href="consultausuarios.php" class="dropdown-item">Tela de Usuarios</a>
                            </div>

                        </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Empresa</a>

                        <div class="dropdown-menu">
                            <a href="CadastroEmpresa.php" class="dropdown-item">Cadastrar</a>
                            <a href="consultaEmpresa.php" class="dropdown-item">Consultar/alterar</a>

                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Funcionarios</a>

                        <div class="dropdown-menu">
                            <a href="cadastroFuncionario.php" class="dropdown-item">Cadastrar Funcionarios</a>
                            <a href="consultaFuncionario.php" class="dropdown-item">Consultar/alterar Funcionarios</a>
                            <a href="cadastroContrato.php" class="dropdown-item">Cadastrar Contrato</a>
                            <a href="consultaexercicio.php" class="dropdown-item">Consultar/Alterar Contrato</a>
							<a href="cadastroDependente.php" class="dropdown-item">Cadastro de Dependente	 </a>
							<a href="alterarDependente.php" class="dropdown-item">Consultar/Alterar de Dependente	 </a>
                        
                        
						</div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Gerar PDF's</a>

                        <div class="dropdown-menu">
                            <a href="gerarContrato.php" class="dropdown-item">Gerar Contrato de Trabalho</a>
                            <a href="gerarRegistro.php" class="dropdown-item">Gerar Registro de Empregado</a>
                            <a href="gerarVale.php" class="dropdown-item">Gerar Vale Transporte</a>
                            <a href="gerarSalarioFamilia.php" class="dropdown-item">Gerar Salario Familia</a>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Ficha</a>

                        <div class="dropdown-menu">
                            <a href="cadastroVeiculo1.php" class="dropdown-item">Cadastrar Ficha</a>
                            <a href="consultaVeiculo.php" class="dropdown-item">Consultar/alterar Ficha</a>
                            <a href="" class="dropdown-item">ficha</a>
                        </div>

                    </li>


                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Relatórios</a>

                        <div class="dropdown-menu">
                            <a href="emitefiliacao.php" class="dropdown-item">Emitir Filiação</a>
                            <a href="regulamento.php" target="_blank" class="dropdown-item">Regulamento</a>
                            <a href="manual.php" class="dropdown-item" target="_blank">Manual</a>
                            <a href="dashboard.php" class="dropdown-item">Dashboard</a>
                        </div>

                    </li>

                    <li class="nav-item ">
                        <a href="logout.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>

