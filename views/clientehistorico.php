
<div class="container-fluid">
    <h1 class="text text-center">Dados do Cliente</h1>
    
    <div class="form-group">
        <input class="form-control" name="nome" id="nome" value="Nome completo" type="text">
        <br>
         <input class="form-control" name="cpf" id="nome" value="CPF somente numero" type="text">
        <br>
        <input class="form-control" name="endereco" id="endereco" value="Endereço" type="text">
        <br>
        <input class="form-control" name="telefone" id="telefone" value="Telefone" type="text">
              <br>
        <input class="form-control" name="telefone2" id="celular" value="Celular" type="text">
              <br>
              <input class="form-control" name="email" id="email" value="E-mail" type="email">
              <br>
               <button class="btn btn-success" type="submit">Editar</button>
    </div>
        <div class="alert alert-danger" role="alert">
        Preencher os campos obrigatorios! Por favor!
    </div>
    <div class="alert alert-success" role="alert">
        Atualizado com sucesso!
        
    </div>
    
    <div class="form-group">
        <div class="h2">Veiculos do Cliente</div>
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Marca/Modelo</th>
        <th>Tipo Combustivel</th>
        <th>Ano</th>
        <th>Placa</th>
         <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <tr> 
    
        <td>Fiat/Sedan</td>
        <td>Gasolina</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
        <td>
            <a href="<?php BASE_URL;?>veiculohistorico" class="btn btn-info">Ver</a>
            
        </td>
        </a>
     </tr>
      <tr>
          <td>Fiat/Sedan</td>
        <td>Gasolina</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
      </tr>
      <tr>
        <td>Fiat/Sedan</td>
        <td>Gasolina</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
      </tr>
    </tbody>
  </table>
    </div>
    
 <div class="form-group">
        <div class="h2">Equipamento do Cliente</div>
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Marca/Modelo</th>
        <th>Tipo Combustivel</th>
        <th>Ano</th>
        <th></th>
         <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <tr> 
    
        <td>walita</td>
        <td></td>
        <td>2009/2009</td>
        <td></td>
        <td>
            <a href="<?php BASE_URL;?>equipamentohistorico" class="btn btn-info">Ver</a>
            
        </td>
        </a>
     </tr>
      <tr>
          <td>Fiat/Sedan</td>
        <td>Gasolina</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
      </tr>
      <tr>
        <td>Fiat/Sedan</td>
        <td>Gasolina</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
      </tr>
    </tbody>
  </table>
    </div>
    
    
    
    
    
</div>