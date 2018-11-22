<?php

class produtoController extends controller {
    
    public function index (){
        $dados=array();
        
        
        
        
        
        $this->loadTemplate("produto",$dados);
    }
}

