<div class="container-fluid">
    <h1 class="text-center"> Editar Orçamento</h1>
  
    <div class="form-group">
        <div class="row">
            <div class="col-sm">
        <input class="form-control" name="numero" id="numero" value="Ordem de serviço" type="text">
        </div>
            <div class="col-sm">
        <select class="form-control">
            <option selected="selected">Selecione o Status...</option>
            <option>Em aberto</option>
            <option>Em manutenção</option>
            <option>Finalizada</option>
        </select>
        </div>
            </div>
        <br>
        
        <div class="row">
            <div class="col-sm">
        <div class="input-group-prepend" >
            <span class="input-group-text"><span  class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" class="form-control" id="datepicker-entrada" placeholder="Data de Entrada" >

        </div>
                </div>
            <div class="col-sm">
        <div class="input-group-prepend" >
            <span class="input-group-text"><span  class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" class="form-control" id="datepicker-saida" placeholder="Data de Saida" >

        </div>
            </div>
        </div>
        <br>
       <div class="input-group mb-3">
        <input class="form-control" name="nome" id="nome" value="nome cliente" type="text">
        <div class="input-group-append">
            <a href="#" class="btn btn-outline-secondary"  data-toggle="modal" data-target="#clienteModal" type="button"><span class="glyphiconglyphicon glyphicon-pencil" aria-hidden="true"></span></a>
  </div>
       </div>
        
        
        <br>
        
        
    
      <h5 class="mb-0">
       
          Editar Veiculo
        
      </h5>
    
    

   
      
    
    <br>
        
        <input class="form-control" name="marca" id="marca" placeholder="Marca/Modelo" type="text">
        <br>
       
        <input class="form-control"  name="ano" id="ano" placeholder="Ano" type="text">
    <br>
        
        <input class="form-control" name="placa" id="placa" placeholder="Placa" type="text">
        <br>
        <input class="form-control" name="km" id="km" placeholder="KM" type="text">
        <br>
       <select class="form-control">
        <option selected="">Tipo de Combustivel...</option>
        <option>Gasolina</option>
        <option>Alcool</option>
        <option>GNV</option>
        <option>Diesel</option>
        <option>Gasolina/Alcool</option>
    </select>
        <br>
        <textarea class="form-control" name="defeito" id="defeito" type="text" placeholder="Problema relatado"></textarea>
        <br>
        <textarea class="form-control" name="obs" id="obs" type="text" placeholder="Observação"></textarea>
        <br>
        <textarea class="form-control" name="servico" id="servico" type="text" placeholder="Serviço Realizado"></textarea>
     
 
</div>
        
        
        
    
        <!-- Modal -->
<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <label for="nome">Nome Completo</label>
          <input class="form-control" name="nome" id="nome" value="nome cliente" type="text">
          <br>
          <label for="cpf">CPF</label>
           <input class="form-control" name="cpf" id="cpf" placeholder="CPF somente numero" type="text">
        <br>
        <label for="endereco">Endereço</label>
        <input class="form-control" name="endereco" id="endereco" placeholder="Endereço" type="text">
        <br>
          <label for="telefone">Telefone</label>
         <input class="form-control" name="telefone" id="telefone" value="telefone cliente" type="text">
        <br>
        <label for="celular">Celular</label>
        <input class="form-control" name="celular" id="celular" value="celular cliente" type="text">
        <br>
        <label for="email">E-mail</label>
        <input class="form-control" name="email" id="email" value="e-mail cliente" type="email">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>
        
        
        
       
      

        <br>
        <button class="btn btn-success" type="submit">Editar</button>


        <br>
        <br>
        



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



</div>
<div class="alert alert-danger" role="alert">
    Preencher os campos obrigatórios! Por favor!
</div>
<div class="alert alert-success" role="alert">
    Atualizado com sucesso!

</div>
