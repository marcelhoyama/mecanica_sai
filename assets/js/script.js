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

function ListaVeiculo(id_cliente) {

    $.ajax({

        url: 'listarveiculo',
        type: 'POST',
        data: {id_cliente: id_cliente},
        dataType: 'json',
        success: function (retorno) {
            $('#id_veiculo').html(retorno);
        }
    });

}

function ListaEquipamento(id_cliente) {

    $.ajax({

        url: 'listarequipamento',
        type: 'POST',
        data: {id_cliente: id_cliente},
        dataType: 'json',
        success: function (retorno) {
            $('#id_equipamento').html(retorno);
        }
    });

}

function pegarObjeto(obj) {
    var item = obj.value;
    if (item === null) {

    } else {
        $.ajax({
            url: 'orcamento/pegar_veiculo',
            type: 'POST',
            data: {cliente: item},
            dataType: 'json',
            success: function (json) {
                if (json === false) {
                    html += '<option value=""> Nada Encontrado...</option>';


                    $('#id_veiculo').html(html);
                    var html3 = '';

                    html3 += ' <a href="javascript::;" onclick="cadastrarveiculo(' + item + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                    $('.numero_cliente').html(html3);


                } else {
                    var html = '';

                    for (var i in json) {
                        html += '<option value="' + json[i].id + '">' + json[i].placa + '</option>';

                    }
                    $('#id_veiculo').html(html);
                    var html3 = '';

                    html3 += '<input hidden="hidden" id="cliente" value="' + json[i].id_cliente + '">';
                    html3 += ' <a href="javascript::;" onclick="cadastrarveiculo(' + json[i].id_cliente + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                    $('.numero_cliente').html(html3);
                    $.ajax({
                        url: 'orcamento/pegar_equipamento',
                        type: 'POST',
                        data: {cliente: item},
                        dataType: 'json',
                        success: function (json2) {
                            if (json2 === false) {
                               var html ='';
                                html += '<option value=""> Nada Encontrado...</option>';


                                $('#id_equipamento').html(html);
                                var html3 = '';

                                html3 += ' <a href="javascript::;" onclick="cadastrarequipamento(' + item + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                                $('.numero_equipamento').html(html3);


                            } else {
                                var html2 = '';

                                for (var i in json2) {
                                    html2 += '<option value="' + json2[i].id + '">' + json2[i].tipo + '</option>';

                                }
                                $('#id_equipamento').html(html2);


                                var html3 = '';

                                html3 += '<input hidden="hidden" id="cliente" value="' + json2[i].id_cliente + '">';
                                html3 += ' <a href="javascript::;" onclick="cadastrarequipamento(' + json2[i].id_cliente + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                                $('.numero_equipamento').html(html3);
                            }
                        },
                        error: function () {
                            // cadastro equipamento
                        }
                    });
                }
            },
            error: function () {
                //cadastro veiculo
            }
        });
    }
}



function cadastrarveiculo(id_cliente) {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'veiculo',
        type: 'POST',
        data: {id_cliente: id_cliente},
        success: function (html) {

            $('#clienteModal').find('.modal-body').html(html);

            $('#clienteModal').find('.modal-body').find('form').on('submit', function (e) {

                e.preventDefault();

                var marca = $(this).find('input[name=marca]').val();
                var ano = $(this).find('input[name=ano]').val();
                var placa = $(this).find('input[name=placa]').val();
                var km = $(this).find('input[name=km]').val();
                var tipo = $(this).find('select[name=tipo]').val();
                var id_cliente = $(this).find('input[name=cliente_veiculo]').val();


                if (placa === '' && km === '') {

                } else {

                    $.ajax({
                        url: 'cadastrarveiculo',
                        type: 'POST',
                        data: {marca: marca, ano: ano, placa: placa, km: km, tipo: tipo, id_cliente: id_cliente},
                        dataType: 'json',
                        success: function () {

                            ListaVeiculo(id_cliente);

                        }
                    });
                    $('#clienteModal').modal('hide');
                }

            });


        }
    });
}
function cadastrarequipamento(id_cliente) {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'equipamento',
        type: 'POST',
        data: {id_cliente: id_cliente},
        dataType: 'jason',

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

                if (marca === '' && tipo === '') {

                } else {

                    $.ajax({
                        url: 'cadastrarequipamento',
                        type: 'POST',
                        data: {marca: marca, ano: ano, tipo: tipo, defeito: defeito, servico: servico, obs: obs},

                        success: function () {

                            ListarEquipamento(id_cliente);


                        }
                    });
                    $('#clienteModal').modal('hide');
                }

            });


        }
    });
}

