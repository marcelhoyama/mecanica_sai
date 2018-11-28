<form method="POST" id="cadastrarequipamento"> 
    <h1 class="text text-center">Cadastro Equipamento</h1>
    
    <div class="form-group">
              <label for="tipo">Tipo do equipamento:</label>
              <select class="form-control" id="id_cliente" >
                  <option></option>
                  <?php foreach ($viewData['listarcliente'] as $value) : ?>
                        <option value="<?php echo $value['id'];?>"><?php echo $value['nome'];?></option>
                        <?php endforeach; ?>
              </select>  </div>
<div class="form-group">
              <label for="tipo">Tipo do equipamento:</label>
   <input class="form-control" name="tipo" id="tipo" placeholder="Tipo do equipamento" type="text">
   </div>
    <div class="form-group">
              <label for="marca">Marca/Modelo:</label>
        <input class="form-control" name="marca" id="marca" placeholder="Marca/Modelo" type="text">
    </div>
     
    <div class="form-group">
              <label for="ano">Ano:</label>
        <input class="form-control"  name="ano" id="ano" placeholder="Ano" type="text">
    </div>   
    <div class="form-group">
              <label for="defeito">Problema Relatado:</label>
   <textarea class="form-control" name="defeito" id="defeito" type="text" placeholder="Problema relatado"></textarea>
    
    </div>
    <div class="form-group">
              <label for="obs">Observação:</label>
        <textarea class="form-control" name="obs" id="obs" type="text" placeholder="Observação"></textarea>
    </div>
    <div class="form-group">
              <label for="servico">Serviço Realizado:</label>
        <textarea class="form-control" name="servico" id="servico" type="text" placeholder="Serviço Realizado"></textarea> 
      </div>
      </div>
    </div>
  </div>
 
</div>
    
    <br>
        
    <button class="btn btn-success" type="submit">Cadastrar</button>
    
  
    
</div>


