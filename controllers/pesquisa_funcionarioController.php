<?php

class pesquisa_funcionarioController extends controller {
    
    public function index (){
        $dados=array();
        
        
        
        
        
        $this->loadTemplate("pesquisa_funcionario",$dados);
    }
}

