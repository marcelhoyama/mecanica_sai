<?php

class veiculoController extends controller {
    
    public function index (){
       $dados=array();
// os dados sendo pego direto no cadastrar veiculo        
   
        
        $this->loadView("veiculo",$dados);
    }
   }


