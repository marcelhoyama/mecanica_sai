<?php

class cadastrarveiculoController extends controller {

    public function index() {
        $dados = array('erro' => '', 'ok' => '');
$c =new cliente();
        if (isset($_POST['placa']) && !empty($_POST['placa'])) {
            $marca = trim(addslashes($_POST['marca']));
            $ano = trim(addslashes($_POST['ano']));
            $placa = trim(addslashes($_POST['placa']));
            $km = trim(addslashes($_POST['km']));
            $tipo = trim(addslashes($_POST['tipo']));
            $defeito = trim(addslashes($_POST['defeito']));
            $obs = trim(addslashes($_POST['obs']));
             $servico = trim(addslashes($_POST['servico']));
             $id_cliente= trim(addslashes($_POST['id_cliente']));
           
             
            
           $c->cadastrar($marca, $ano, $placa, $km, $tipo,$servico, $defeito,$obs, $id_cliente);
       
           
        }

        $this->loadView("cadastrarveiculo", $dados);
    }

}
