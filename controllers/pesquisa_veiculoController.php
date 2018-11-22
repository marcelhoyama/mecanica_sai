<?php

class pesquisa_veiculoController extends controller {
    
    public function index (){
        $dados=array();
        
        
        
        
        
        $this->loadTemplate("pesquisa_veiculo",$dados);
    }
}

