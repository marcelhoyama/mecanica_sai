<?php

class pesquisa_clienteController extends controller {
    
    public function index (){
        $dados=array();
        
        
        
        
        
        $this->loadTemplate("pesquisa_cliente",$dados);
    }
}

