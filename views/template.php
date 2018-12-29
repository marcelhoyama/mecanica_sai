<!-- Esse template = design (estilo) da maioria das paginas -->
<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->


        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>assets/css/glyphicon.css" rel="stylesheet">

        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>

<!--        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bunble.min.js"></script>-->
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/css/style.css"></script>
        
        <!--<script src="<?php echo BASE_URL; ?>assets/js/additional-methods.min.js"></script>-->
        <script src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/jquery.validate.js"></script>
        
        <script src="<?php echo BASE_URL; ?>assets/js/messages_pt_BR.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/validar_campos.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo BASE_URL; ?>assets/js/locales/bootstrap-datepicker.pt-BR.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="<?php BASE_URL ?>menuprincipal">Mecanica Sai</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php BASE_URL; ?>menuprincipal">Menu Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php BASE_URL; ?>orcamento"></a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Cadastrar
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php BASE_URL; ?>cliente">Cliente</a> 
                        <a class="dropdown-item" href="<?php BASE_URL; ?>funcionario">Funcionario</a>
                      <!--  <a class="dropdown-item" href="<?php BASE_URL; ?>veiculo">Veiculo</a>
                        <a class="dropdown-item" href="<?php BASE_URL; ?>equipamento">Equipamento</a> -->
                        <a class="dropdown-item" href="<?php BASE_URL; ?>orcamento">Orçamento</a>
<!--                        <a class="dropdown-item" href="<?php BASE_URL; ?>produto">Produto</a>-->

                    </div>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Pesquisar
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php BASE_URL; ?>pesquisa_cliente">Cliente</a>
                        <a class="dropdown-item" href="<?php BASE_URL; ?>pesquisa_funcionario">Funcionario</a>
                        <a class="dropdown-item" href="<?php BASE_URL; ?>pesquisa_veiculo">Veiculo</a>
                        <a class="dropdown-item" href="<?php BASE_URL; ?>pesquisa_equipamento">Equipamento</a>
                        <a class="dropdown-item" href="<?php BASE_URL; ?>orcamentopesquisar">Orçamento</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>






    </body>
</html>

