<?php

class funcionarioController extends controller {
    
    public function index (){
        $dados=array();
        
        
        
        
        
        $this->loadTemplate("funcionario",$dados);
    }
}

