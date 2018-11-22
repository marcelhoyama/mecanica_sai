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
    
   <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.slim.min.js"> </script>
  
  <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bunble.min.js"></script>
    
     <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>


<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/css/style.css"></script>


   
  </head>
  <body>
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Mecanica Sai</a>

  <!-- Links -->
  <ul class="navbar-nav">
     <!-- Dropdown -->
    <li class="nav-item">
      <a class="nav-link" href="#">Pesquisar</a>
     
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php BASE_URL; ?>orcamento">Orçamentos</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Cadastrar
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Cliente</a>
        <a class="dropdown-item" href="#">Carro</a>
        <a class="dropdown-item" href="#">Equipamento</a>
      </div>
    </li>
  </ul>
</nav>
 
<!--  aqui onde vai o corpo das paginas do sistema -->
<?php  $this->loadViewInTemplate($viewName, $viewData); ?>





  
</body>
</html>
 
