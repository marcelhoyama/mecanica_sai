

$(function () {
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#cep').mask('00.000-000');
    $('#valor').mask('000.000.000.000.000,00', {reverse: true});
    $('#telefone2').mask('(00) 00000-0000');
    $('#telefone').mask('(00) 0000-0000');



});

$(document).ready(function () {

    $('#cadastrarfuncionario').validate({

        rules: {
            cpf: {cpfBR: true},
            nome: {required: true, isString: true},
            telefone2: "required",
            email: true


        },
        messages: {

        }
    });


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

    $('#cadastrarimovel').validate({

        rules: {
            status: "required",
            tipovia: {required: true},
            endereco: {required: true, isString: true},
            numero: "required",
            bairro: {required: true, isString: true},
            cidade: {required: true, isString: true},
            estado: "required",
            tipoimovel: "required",
            id_tipo_assunto: "required",
            nivel: "required"


        },
        messages: {

        }
    });

    $('#cadastrarinquilino').validate({

        rules: {
            cpf: {required: true, cpfBR: true},
            nome: {required: true, isString: true},
            telefone: "required",
            email: true


        },
        messages: {

        }
    });


    $('#tenhointeresse').validate({

        rules: {
            nome: {required: true, isString: true},
            email: true,
            fone: "required",
            telefone: "required",
            celular: {required: true}



        },
        messages: {

        }
    });

    $('#editarcliente').validate({

        rules: {
            cpf: {required: true, cpfBR: true},
            nome: {required: true, isString: true},
            celular: "required",
            email: true


        },
        messages: {

        }
    });

    $('#editarfiador').validate({

        rules: {
            cpf: {required: true, cpfBR: true},
            nome: {required: true, isString: true},
            telefone: "required",
            email: true


        },
        messages: {

        }
    });

    $('#editarimovel').validate({

        rules: {
            status: "required",
            tipovia: {required: true},
            endereco: {required: true, isString: true},
            numero: "required",
            bairro: {required: true, isString: true},
            cidade: {required: true, isString: true},
            estado: {required: true},
            id_tipo_imovel: "required",
            id_tipo_assunto: "required"



        },
        messages: {

        }
    });


    $('#tenhointeressado').validate({

        rules: {
            nome: {required: true, isString: true},
            email: true,
            fonefixo: "required",
            celular: "required"



        },
        messages: {

        }
    });

    $('#perfil').validate({

        rules: {
            nome: {required: true, isString: true},
            email: true,
            telefone: "required",
            creci: "required",

            resenha: {equalTo: "#senha"}



        },
        messages: {

        }
    });

    $('#cadastrarcontato').validate({

        rules: {
            celular: {required: true},
            nome: {required: true, isString: true},
            assunto: "required",
            tipoimovel: "required",
            email: {email: true}


        },
        messages: {

        }
    });
});
