function cadastrarcliente() {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'cliente',
        type: 'POST',

        success: function (html) {

            $('#clienteModal').find('.modal-body').html(html);
            $('#clienteModal').find('.modal-body').find('form').on('submit', function (e) {

                e.preventDefault();

                var nome = $(this).find('input[name=nome]').val();
                var cpf = $(this).find('input[name=cpf]').val();
                var endereco = $(this).find('input[name=endereco]').val();
                var telefone = $(this).find('input[name=telefone]').val();
                var telefone2 = $(this).find('input[name=telefone2]').val();
                var email = $(this).find('input[name=email]').val();

                if (nome === '' && telefone2 === '') {

                } else {

                    $.ajax({
                        url: 'cadastrarcliente',
                        type: 'POST',
                        data: {nome: nome, email: email, telefone: telefone, telefone2: telefone2, endereco: endereco, cpf: cpf},

                        success: function () {
                            ListaCliente();

                        }

                    });

                    $('#clienteModal').modal('hide');
                }

            });


        }
    });
}

function ListaCliente() {
    $.post(
            "listarcliente",
            function (retorno) {
                $('#id_cliente').html(retorno);
            });
}

function ListaVeiculo() {
    $.post(
            "orcamento",
            function (retorno) {
                $('#id_veiculo').html(retorno);
            });
}
function pegarObjeto(obj) {
    var item = obj.value;
    $.ajax({
        url:'orcamento/pegar_veiculo',
        type: 'POST',
        data: {cliente:item},
        dataType: 'json',
        success: function (json) {
            
                var html = '';
                
                for (var i in json) {
                    html += '<option value="' + json[i].id + '">' + json[i].placa + '</option>';

                }
                $('#id_veiculo').html(html);
                var html3 = '';
       for (var i in json) {
                    html3 += '<input hidden="hidden" id="cliente" value="' + json[i].id_cliente + '">';

                }
                $('.numero_cliente').html(html3);
           $.ajax({
        url:'orcamento/pegar_equipamento',
        type: 'POST',
        data: {cliente:item},
        dataType: 'json',
        success: function (json2) {
            
                var html2 = '';
                
                for (var i in json2) {
                    html2 += '<option value="' + json2[i].id + '">' + json2[i].tipo + '</option>';

                }
                $('#id_equipamento').html(html2);

          
        }
    });
        }
    });
     
}



function cadastrarveiculo() {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'veiculo',
        type: 'POST',

        success: function (html) {

            $('#clienteModal').find('.modal-body').html(html);
            $('#clienteModal').find('.modal-body').find('form').on('submit', function (e) {

                e.preventDefault();

                var marca = $(this).find('input[name=marca]').val();
                var ano = $(this).find('input[name=ano]').val();
                var placa = $(this).find('input[name=placa]').val();
                var km = $(this).find('input[name=km]').val();
                var tipo = $(this).find('input[name=tipo]').val();
                var defeito = $(this).find('input[name=defeito]').val();
                var servico = $(this).find('input[name=servico]').val();
                var obs = $(this).find('input[name=obs]').val();
                var id_cliente = $(this).find('[input[name=cliente]').val();

                if (placa === '' && km === '') {

                } else {

                    $.ajax({
                        url: 'cadastrarveiculo',
                        type: 'POST',
                        data: {marca: marca, ano: ano, placa: placa, km: km, tipo: tipo, defeito: defeito, servico: servico, obs: obs, id_cliente: id_cliente},

                        success: function () {

                            listaVeiculo();


                        }
                    });
                    $('#clienteModal').modal('hide');
                }

            });


        }
    });
}
function cadastrarequipamento() {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'equipamento',
        type: 'POST',

        success: function (html) {

            $('#clienteModal').find('.modal-body').html(html);
            $('#clienteModal').find('.modal-body').find('form').on('submit', function (e) {

                e.preventDefault();

                var marca = $(this).find('input[name=marca]').val();
                var ano = $(this).find('input[name=ano]').val();
                var tipo = $(this).find('input[name=tipo]').val();
                var defeito = $(this).find('input[name=defeito]').val();
                var servico = $(this).find('input[name=servico]').val();
                var obs = $(this).find('input[name=obs]').val();

                if (placa === '' && km === '') {

                } else {

                    $.ajax({
                        url: 'cadastrarequipamento',
                        type: 'POST',
                        data: {marca: marca, ano: ano, tipo: tipo, defeito: defeito, servico: servico, obs: obs},

                        success: function (retorno) {

                            $('#id_cliente').html(retorno);
                            $('#clienteModal').modal('hide');

                        }
                    });

                }

            });


        }
    });
}

