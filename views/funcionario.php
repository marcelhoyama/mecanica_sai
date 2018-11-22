

<div class="container-fluid">
    <h1 class="text text-center">Cadastro funcionario</h1>
    
    <div class="form-group">
        <input class="form-control" name="nome" id="nome" placeholder="Nome completo" type="text">
        <br>
        <input class="form-control" name="cpf" id="nome" placeholder="CPF somente numero" type="text">
        <br>
        <input class="form-control" name="endereco" id="endereco" placeholder="Endereço" type="text">
        <br>
        <input class="form-control" name="telefone" id="telefone" placeholder="Telefone" type="text">
              <br>
        <input class="form-control" name="telefone2" id="celular" placeholder="Celular" type="text">
              <br>
              <input class="form-control" name="email" id="email" placeholder="E-mail" type="email">
              <br>
              <button class="btn btn-success" type="submit">Cadastrar</button>
    </div>
    
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
    
    
    
</div>