<div class="container-fluid">
    <h1 class="text text-center">Cadastro veiculo</h1>
<div class="form-group">
   
    <input class="form-control" name="marca" id="marca" placeholder="Marca/modelo" type="text">
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
        
    <button class="btn btn-success" type="submit">Cadastrar</button>
    
  
    
</div>

 <div class="alert alert-danger" role="alert">
        Preencher os campos obrigatorios!Por favor!
    </div>
    <div class="alert alert-success" role="alert">
        Cadastrado com sucesso!
        
    </div>
</div>

