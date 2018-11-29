<?php

class listarclienteController extends controller {
    
    public function index (){
        $dados=array();
        
        $c=new cliente();
      
       
       $dados['listarcliente']=$c->listarCliente();
       
        
        
        $this->loadView("listarcliente",$dados);
    
}
}

