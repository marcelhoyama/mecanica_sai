<?php

class menuprincipalController extends controller {
    
    public function index (){
        $dados=array();
        
        
        
        
        
        $this->loadTemplate("menuprincipal",$dados);
    }
}

