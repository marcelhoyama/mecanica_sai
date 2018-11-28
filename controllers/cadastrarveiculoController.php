<?php

class cadastrarveiculoController extends controller {

    public function index() {
        $dados = array('erro' => '', 'ok' => '');
$c =new cliente();
        if (isset($_POST['placa']) && !empty($_POST['placa'])) {
            $marca = trim(addslashes($_POST['marca']));
            $ano = trim(addslashes($_POST['ano']));
            $placa = addslashes($_POST['placa']);
            $km = addslashes($_POST['km']);
            $tipo = addslashes($_POST['tipo']);
            $defeito = addslashes($_POST['defeito']);
            $obs = addslashes($_POST['obs']);
             $servico = addslashes($_POST['servico']);
             
           
             
            
           $c->cadastrar($marca, $ano, $placa, $km, $tipo,$servico, $defeito,$obs);
       
           
        }

        $this->loadView("cadastrarveiculo", $dados);
    }

}
