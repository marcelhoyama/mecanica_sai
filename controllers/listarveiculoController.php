<?php

class listarveiculoController extends controller {
    
    public function index (){
        $dados=array();
        
        $c=new cliente();
      
       
       $dados['listarveiculo']=$c->listarVeiculo();
       
        // json_encode($dados);
        
        $this->loadView("listarveiculo",$dados);
    
}
}

