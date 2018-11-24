<div class="container-fluid">
    <h1 class="text-center">Cadastro Orçamento</h1>
    <div class="h4">Obs: orçamento individual</div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm">
                <label for="numero">Ordem de Serviço</label>
                <input class="form-control" name="numero" id="numero" value="<?php echo '';?>" type="text">
        </div>
            <div class="col-sm">
                <label for="status">Status</label>
        <select class="form-control">
            <option selected="selected" name="status" id="status">Selecione o Status...</option>
            <option value="Em Aberto">Em aberto</option>
            <option value="Em Manutenção">Em manutenção</option>
            <option value="Finalizada">Finalizada</option>
        </select>
        </div>
            </div>
        <br>
        
        <div class="row">
            <div class="col-sm">
        <div class="input-group-prepend" >
            <span class="input-group-text"><span  class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" class="form-control" name="dataentrada" id="datepicker-entrada" placeholder="Data de Entrada" >

        </div>
                </div>
            <div class="col-sm">
        <div class="input-group-prepend" >
            <span class="input-group-text"><span  class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" class="form-control" name="datasaida" id="datepicker-saida" placeholder="Data de Saida" >

        </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md">
            <label for="nome">Nome do Cliente:</label>
       <div class="input-group mb-3">
            <select name="nome" id="nome" class="form-control">
               <option>Selecione o Cliente Cadastrado...</option>
           <?php foreach ($viewData['listarcliente'] as $value) :?>
                    <option value="<?php echo $value['id']; ?>" ><?php echo $value['nome']; ?></option>

           <?php  
           endforeach;?>
          
            
           </select>
          
        <div class="input-group-append">
            <a href="javascript::;" onclick="cadastrarcliente()" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
  </div>
       </div>
        </div>
        </div>
        <br>
        
        
        <div id="accordion">
  <div class="card">
       <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
       
          Cadastrar Veiculo
        
      </h5>
    </div>
     </button>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    
          <div class="form-group">
    <label for="marca">Marca:</label>
        <input class="form-control" name="marca" id="marca" placeholder="Marca/Modelo" type="text">
        </div>
          <div class="form-group">
        <label for="ano">Ano:</label>
        <input class="form-control"  name="ano" id="ano" placeholder="Ano" type="text">
    </div>
          <div class="form-group">
        <label for="placa">Placa:</label>
        <input class="form-control" name="placa" id="placa" placeholder="Placa" type="text">
        </div>
          <div class="form-group">
              <label for="km">KM:</label>
        <input class="form-control" name="km" id="km" placeholder="Quilometragem" type="text">
        </div>
          <div class="form-group">
          <label for="tipo">Tipo de Combustivel</label>
       <select class="form-control">
           <option selected="" id="tipo">Selecione o Tipo de Combustivel...</option>
        <option>Gasolina</option>
        <option>Alcool</option>
        <option>GNV</option>
        <option>Diesel</option>
        <option>Gasolina/Alcool</option>
    </select>
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
            <div class="h5 text-center">Ou</div>
  <div class="card">
      <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <div class="card-header" id="headingTwo" >
      <h5 class="mb-0">
       
          Cadastrar Equipamento
    
      </h5>
    </div>
      </button>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
    <div class="form-group">
              <label for="tipo">Tipo do equipamento:</label>
   <input class="form-control" name="tipo" id="tipo" placeholder="Tipo do equipamento" type="text">
   </div>
    <div class="form-group">
              <label for="marca">Marca/Modelo:</label>
        <input class="form-control" name="marca" id="marca" placeholder="Marca/Modelo" type="text">
    </div>
        <div class="form-group">
              <label for="fabricante">Fabricante:</label>
        <input class="form-control" name="fabricante" id="fabricante" placeholder="Fabricante" type="text">
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
        
        
        
    
        <!-- Modal -->
<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
        
        
        
       
      

        <br>
        <button class="btn btn-success" type="submit" data-toggle="modal" data-target=".bd-example-modal-sm">Cadastrar</button>

<?php if("1=1"){ ?>
    
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Imprimir</button>

<?php }?>
    </div>





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
    


<!-- Modal pequeno -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <div class="alert alert-success" role="alert">
    Cadastrado com sucesso!

</div>
        <a href="<?php BASE_URL; ?>home" type="button" class="btn btn-primary">Imprimir</a>

    </div>
  </div>
</div>

    <script>
        $('#datepicker-entrada').datepicker({
            format: 'dd/mm/yyyy',
            language: 'pt-BR',
            startDate: '+0d'
        });
        $('#datepicker-saida').datepicker({
            format: 'dd/mm/yyyy',
            language: 'pt-BR',
            startDate: '+0d'
        });
    </script>