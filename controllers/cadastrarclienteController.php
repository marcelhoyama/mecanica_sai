<?php

class cadastrarclienteController extends controller {

    public function index() {
        $dados = array('erro' => '', 'ok' => '');
$c =new cliente();
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = trim(addslashes($_POST['nome']));
            $email = trim(addslashes($_POST['email']));
            $telefone = addslashes($_POST['telefone']);
            $telefone2 = addslashes($_POST['telefone2']);
            $cpf = addslashes($_POST['cpf']);
            $endereco= trim(addslashes($_POST['endereco']));
            
           $id_cliente=$c->cadastrar($nome, $cpf, $endereco, $telefone, $telefone2, $email);
       
            echo json_encode($dados['cliente']=$c->listarUmCliente($id_cliente));
         
        }

        $this->loadView("cadastrarcliente", $dados);
    }

}
