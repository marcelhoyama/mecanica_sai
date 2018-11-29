<?php

class listarveiculoController extends controller {
    
    public function index (){
        $dados=array();
        
       
        
        $this->loadView("listarveiculo",$dados);
    
}


}

