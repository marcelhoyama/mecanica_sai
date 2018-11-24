
<div class="container-fluid">
    <form class="" method="POST" id="cadastrarfuncionario">
    <h1 class="text text-center">Cadastro funcionario</h1>
    <?php
    if(isset($erro) && !empty($erro)){
        ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro;?>
    </div>
    <?php } ?>
      <?php
    if(isset($ok) && !empty($ok)){
        ?>
    <div class="alert alert-success" role="alert">
        <?php echo $ok; ?>
        
    </div>
     <?php } ?>
    
    <div class="form-group">
        <label for="nome" class="">Nome Completo:*</label>
        <input class="form-control" name="nome" id="nome" placeholder="Nome completo" type="text">
    </div>
    <div class="form-group">
        <label for="cpf" class="">CPF:</label>
        <input class="form-control" name="cpf" id="cpf" placeholder="somente numero" type="text">
    </div>
    <div class="form-group">
        <label for="endereco" class="">Endereço:</label>
        <input class="form-control" name="endereco" id="endereco" placeholder="Endereço" type="text">
    </div>
    <div class="form-group">
        <label for="telefone" class="">Telefone:</label>
        <input class="form-control" name="telefone" id="telefone" placeholder="Telefone" type="text">
    </div>
    <div class="form-group">
        <label for="telefone2" class="">Celular:*</label>
        <input class="form-control" name="telefone2" id="telefone2" placeholder="Celular" type="text">
        
    </div>
    <div class="form-group">
        
    <label for="email" class="">E-mail:</label>
              <input class="form-control" name="email" id="email" placeholder="E-mail" type="email">
    </div>
              <button class="btn btn-success" type="submit">Cadastrar</button>
    
    </form>

    
    
    
</div>