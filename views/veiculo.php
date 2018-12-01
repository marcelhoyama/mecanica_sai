<form method="POST" id="cadastrarveiculo"> 
    <h1 class="text text-center">Cadastro veiculo</h1>
<div class="form-group">
    <input class="form-control" name="cliente_veiculo" id="cliente_veiculo" value="<?php echo $_POST['id_cliente'];?>" type="text" disabled="disabled">
    <br>
    <input class="form-control" name="marca" id="marca" placeholder="Marca/modelo" type="text">
    <br>
    
    <input class="form-control"  name="ano" id="ano" placeholder="Ano" type="text">
    <br>
   
    <input class="form-control" name="placa" id="placa" placeholder="Placa" type="text">
    <br>
    <input class="form-control" name="km" id="km" placeholder="KM" type="text">
    <br>
    
    <div class="form-group">
          <label for="tipo">Tipo de Combustivel</label>
          <select class="form-control" id="tipo" name="tipo" >
           <option>Selecione o Tipo de Combustivel...</option>
           <option value="Gasolina">Gasolina</option>
           <option value="Alcool">Alcool</option>
           <option value="GNV">GNV</option>
           <option value="Diesel">Diesel</option>
           <option value="Gasolina/Alcool">Gasolina/Alcool</option>
    </select>
          </div>
   
    <button class="btn btn-success" type="submit">Cadastrar</button>
    
  
    
</div>


