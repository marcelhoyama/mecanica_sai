<?php

class veiculoController extends controller {
    
    public function index (){
        $dados=array();
        
        
        $v=new veiculo();
        $v->cadastrar($marca, $ano, $placa, $km, $tipo, $servico, $defeito, $obs, $id_veiculo,$id_cliente);
        
        
        $this->loadView("veiculo",$dados);
    }
   

}

