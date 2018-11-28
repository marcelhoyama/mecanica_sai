<?php

class equipamentoController extends controller {
    
    public function index (){
        $dados=array('erro'=>'','ok'=>'');
        
        $c=new cliente();
        $dados['listarcliente']=$c->listarCliente();
        
        
        
        $this->loadView("equipamento",$dados);
    }
}

