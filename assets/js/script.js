function cadastrarcliente() {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'orcamento/cliente',
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

                if (nome !== '' && telefone2 !== '') {
                    $.ajax({
                        url: 'orcamento/cadastrarcliente',
                        type: 'POST',
                        dataType:'json',
                        data: {nome: nome, email: email, telefone: telefone, telefone2: telefone2, endereco: endereco, cpf: cpf},

                        success: function (data) {

                            var obj = JSON.parse(data);

                            $("#id_cliente").prepend(" <option value=" + obj.id + " selected>" + obj.nome + "</option>");

                        },
                        error: function () {
                            alert('eeroro');
                        }

                    });

                    $('#clienteModal').modal('hide');
                } else {

                    alert("Prencha os campos !");
                }

            });


        }
    });
}

function cadastrarveiculo(obj) {
    var id_cliente =obj.value;
    $('#veiculoModal').modal('toggle');
    $.ajax({
        url: 'orcamento/veiculo',
        type: 'POST',
data:{id_cliente:id_cliente},
        success: function (html) {

            $('#veiculoModal').find('.modal-body').html(html);
            $('#veiculoModal').find('.modal-body').find('button').on('click', function () {

              

               var marca = $(this).find('input[name=marca]').val();
                var ano = $(this).find('input[name=ano]').val();
                 var placa = $(this).find('input[name=placa]').val();
                 var km = $(this).find('input[name=km]').val();
                var tipo = $(this).find('select[name=tipo]').val();
                var id_cliente=$(this).find('input[name=cliente_veiculo').val();

                if (placa !== '' && km !== '') {
                    $.ajax({
                  url: 'orcamento/cadastrarveiculo',
                        type: 'POST',
                        dataType:'json',
                        data: {marca: marca, ano: ano, placa: placa, km: km, tipo: tipo, id_cliente: id_cliente},
                        success: function (data) {
//                            var obj = JSON.parse(data);
                            alert("id:" + data);
//var obj = JSON.parse(data);
                           
//$("#id_veiculo").prepend(" <option value="+obj.id+" selected>"+obj.placa+"</option>");
                        },
                        error: function () {
                            alert('eeroro');
                        }

                    });

                    $('#veiculoModal').modal('hide');
                } else {

                    alert("Prencha os campos !");
                }

            });


        }
    });
}


//function cadastrarveiculo(obj) {
//      var id_cliente = obj.value;
//    $('#veiculoModal').modal('toggle');
//    $.ajax({
//        url: 'orcamento/veiculo',
//        type: 'POST',
//        data: {id_cliente: id_cliente},
//       
//        success: function (html2) {
//             $('#veiculoModal').find('.modal-body').html(html2);
//           
//         
//            $('#cadastrarveiculo').on('submit', function (e) {
//
//
//                e.preventDefault();
//
//
//                var marca = $(this).find('input[name=marca]').val();
//                var ano = $(this).find('input[name=ano]').val();
//                 var placa = $(this).find('input[name=placa]').val();
//                 var km = $(this).find('input[name=km]').val();
//                var tipo = $(this).find('select[name=tipo]').val();
//                var id_cliente = $(this).find('input[name=cliente_veiculo]').val();
//
//
//               if (placa !== '' && km !== '') {
////                    alert('marca'+placa);
////                    
//                    $.ajax({
//                        url: 'orcamento/cadastrarveiculo',
//                        type: 'POST',
//                        dataType:'json',
//                        data: {marca: marca, ano: ano, placa: placa, km: km, tipo: tipo, id_cliente: id_cliente},
//
//                        success: function (data) {
////                            var obj = JSON.parse(data);
//                            alert("id:" + data);
////var obj = JSON.parse(data);
//                           
////$("#id_veiculo").prepend(" <option value="+obj.id+" selected>"+obj.placa+"</option>");
//                        },
//                        error: function () {
//                            alert("nao retornou");
//                        }
//                    });
//                     $('#clienteModal').modal('hide');
//                } else {
//
//                    alert("Preencher os campos!");
//
//                }
//               
//            });
//
//
//        }
//    });
//}
function cadastrarequipamento(id_cliente) {
    $('#clienteModal').modal('toggle');
    $.ajax({
        url: 'orcamento/equipamento',
        type: 'POST',
        data: {id_cliente: id_cliente},

        success: function (resposta) {

            $('#clienteModal').find('.modal-body').html(resposta);
            $('#clienteModal').find('.modal-body').on('submit', function (e) {

                e.preventDefault();

                var marca = $(this).find('input[name=marca]').val();
                var descricao = $(this).find('textarea[name=descricao]').val();
                var tipo = $(this).find('input[name=tipo]').val();

                var id_cliente = $(this).find('input[name=cliente_veiculo]').val();


                if (marca !== '' && tipo !== '') {
//                    $.ajax({
//                        url: 'orcamento/cadastrarequipamento',
//                        type: 'POST',
//                        data: {marca: marca, descricao: descricao, tipo: tipo, id_cliente: id_cliente},
//
//                        success: function (data) {
//
//
//                            alert('valores:' + data);
//
//
//                        },
//                        error: function () {
//                            alert("Nao retornou html!");
//                        }
//                    });
                     $('#clienteModal').modal('hide');
                } else {


                    alert("Preencha os campos!");
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
            $('#id_veiculo').innerHTML(retorno);
        }
    });

}

function ListaEquipamento() {

    $.post(
            "orcamento/listarequipamento",
            function (retorno) {
                $('#id_equipamento').html(retorno);
            });
}

function pegarObjeto(obj) {
    var item = obj.value;
    if (item === null) {
        alert('id vazio');
    } else {
        $.ajax({
            url: 'orcamento/pegar_veiculo',
            type: 'POST',
            data: {cliente: item},
            dataType: 'json',
            success: function (json) {
                if (json === false) {
                    var html = '';
                    html += '<option value=""> Nada Encontrado...</option>';


                    $('#id_veiculo').html(html);
                    var html3 = '';

                    html3 += ' <a href="javascript:;" onclick="cadastrarveiculo(' + item + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                    $('.numero_cliente').html(html3);
                    pegarEquipamento(item);

                } else {
                    var html = '';

                    for (var i in json) {
                        html += '<option value="' + json[i].id + '">' + json[i].placa + '</option>';

                    }
                    $('#id_veiculo').html(html);
                    var html8 = '';

                    html8 += '<input hidden="hidden" id="cliente" value="' + json[i].id_cliente + '">';
                    html8 += ' <a href="javascript:;" onclick="cadastrarveiculo(' + json[i].id_cliente + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                    $('.numero_cliente').html(html8);

                    pegarEquipamento(item);
                }
            },
            error: function () {
                alert("Nao pegou o item veiculo");
            }
        });
    }
}

function pegarEquipamento(item) {


    $.ajax({
        url: 'orcamento/pegar_equipamento',
        type: 'POST',
        data: {cliente: item},
        dataType: 'json',
        success: function (json) {
            if (json === false) {
                var html4 = '';
                html4 += '<option value=""> Nada Encontrado...</option>';

                $('#id_equipamento').html(html4);

                var html5 = '';

                html5 += ' <a href="javascript:;" onclick="cadastrarequipamento(' + item + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                $('.numero_equipamento').html(html5);


            } else {

                var html6 = '';

                for (var i in json) {

                    html6 += '<option value="' + json[i].id + '">' + json[i].tipo + '</option>';

                }
                $('#id_equipamento').html(html6);


                var html3 = '';

                html3 += '<input hidden="hidden" id="cliente" value="' + json[i].id_cliente + '">';
                html3 += ' <a href="javascript:;" onclick="cadastrarequipamento(' + json[i].id_cliente + ')" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>';

                $('.numero_equipamento').html(html3);
            }
        },
        error: function () {
            alert('nao pegou equipamento');
        }
    });
}