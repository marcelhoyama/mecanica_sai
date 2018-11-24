<form method="POST" id="cadastrarcliente"> 
<label for="nome">Nome Completo</label>
          <input class="form-control" name="nome" id="nome"  type="text">
          <br>
          <label for="cpf">CPF</label>
           <input class="form-control" name="cpf" id="cpf" placeholder="CPF somente numero" type="text">
        <br>
        <label for="endereco">Endereço</label>
        <input class="form-control" name="endereco" id="endereco"  type="text">
        <br>
          <label for="telefone">Telefone</label>
         <input class="form-control" name="telefone" id="telefone"  type="text">
        <br>
        <label for="telefone2">Celular</label>
        <input class="form-control" name="telefone2" id="telefone2"  type="text">
        <br>
        <label for="email">E-mail</label>
        <input class="form-control" name="email" id="email"  type="email">
        <br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button  type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<script type="text/javascript">
    $(function () {
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#cep').mask('00.000-000');
    $('#valor').mask('000.000.000.000.000,00', {reverse: true});
    $('#telefone2').mask('(00) 00000-0000');
    $('#telefone').mask('(00) 0000-0000');



});
$(document).ready(function () {
 $('#cadastrarcliente').validate({

        rules: {
            cpf: {required: true, cpfBR: true},
            nome: {required: true, isString: true},
            telefone2: "required",
            email: true


        },
        messages: {

        }
    });
    });
</script>