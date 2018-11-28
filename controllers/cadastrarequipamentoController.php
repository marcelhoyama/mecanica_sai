<?php

class cadastrarequipamentoController extends controller {

    public function index() {
          $dados=array('erro'=>'','ok'=>'');
        
        $c=new cliente();
        $dados['listarcliente']=$c->listarCliente();
        
        
        
        $e = new equipamento();
        if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {
            $tipo = trim(addslashes($_POST['tipo']));
            $marca = trim(addslashes($_POST['marca']));
            $fabricante = trim(addslashes($_POST['fabricante']));
            $ano = addslashes($_POST['ano']);
            $defeito = addslashes($_POST['defeito']);
            $obs = addslashes($_POST['obs']);
            $servico = addslashes($_POST['servico']);


            $e->cadastrar($tipo, $ano, $marca, $fabricante, $defeito, $obs, $servico);
        }

        $this->loadView("cadastrarequipamento", $dados);
    }

}
