<?php

class equipamentoController extends controller {
    
 
    public function index (){
        $dados=array();
        
     
        
        
        $this->loadView("equipamento",$dados);
    }
}

