<title>Menu Principal</title>
<div class="container">
    <br>
    
    <div class="form-group">
        <label for="pesquisar" class="label label-text" >Pesquisar</label>
<div class="input-group mb-3">
    
           <input id="pesquisar" type="text" class="form-control" placeholder="Busca por placa, nome, cpf" aria-label="Busca por placa, nome, cpf" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Pesquisar</button>
  </div>
</div>
    
    
    </div>
    
    
    
   <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Email</th>
        <th>Telefone</th>
         <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <tr> 
    
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>88888</td>
        <td>
            <a href="<?php BASE_URL;?>clientehistorico" class="btn btn-info">Ver</a>
            <a href="#" class="btn btn-warning" >Editar</a>
        </td>
        </a>
     </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
    
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Ano</th>
        <th>Placa</th>
         <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <tr> 
    
        <td>Seda</td>
        <td>Fiat</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
        <td>
            <a href="<?php BASE_URL;?>veiculohistorico" class="btn btn-info">Ver</a>
            <a href="#" class="btn btn-warning" >Editar</a>
        </td>
        </a>
     </tr>
      <tr>
         <td>Seda</td>
        <td>Fiat</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
      </tr>
      <tr>
        <td>Seda</td>
        <td>Fiat</td>
        <td>2009/2009</td>
        <td>FRE-888</td>
      </tr>
    </tbody>
  </table>
    
</div>
