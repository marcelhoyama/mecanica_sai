<?php

class equipamentoController extends controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index (){
        $dados=array('erro'=>'','ok'=>'');
        
     
        
        
        $this->loadView("equipamento",$dados);
    }
}

