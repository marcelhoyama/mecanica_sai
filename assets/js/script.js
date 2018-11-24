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
                var celular = $(this).find('input[name=telefone2]').val();
                var email = $(this).find('input[name=email]').val();

 if(nome === '' && celular===''){
                         
                     }else{

                $.ajax({
                    url: 'cadastrarcliente',
                    type: 'POST',
                    data: {nome: nome, email: email, telefone: telefone, celular: celular, endereco: endereco, cpf: cpf},
                
                        success: function () {

                      window.location.href=window.location.href;
                        $('#clienteModal').modal('hide');

                    }
                });

                     }

            });


        }
    });
}


