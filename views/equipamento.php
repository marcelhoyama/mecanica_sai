<form method="POST" id="form">
    <h1 class="text text-center">Cadastro equipamento</h1>
<div class="form-group">
    <input class="form-control" name="cliente_veiculo" id="cliente_veiculo" value="<?php echo $_POST['id_cliente'];?>" type="text" disabled="disabled">
    <br>
    <div class="form-group">
        <label for="tipo">Tipo do Equipamento:</label>
         <input class="form-control" name="tipo" id="tipo" placeholder="" type="text">
    </div>
   
    <div class="form-group" >
        <label for="marca">Marca/Modelo:</label>
         <input class="form-control" name="marca" id="marca" placeholder="" type="text">
    </div>
   
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao" id="descricao" placeholder="" type="text"></textarea>
   
    </div>
  
   
     
    <button class="btn btn-success" type="submit">Cadastrar</button>
    
  
    
</div>

</form>
