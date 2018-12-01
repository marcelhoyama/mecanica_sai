<?php

class listarequipamentoController extends controller {
    
 
    public function index (){
        $dados=array();
        
        $e=new equipamento();
      
       if(isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])){
     $id_cliente= trim(addslashes($_POST['id_cliente']));
           $dados['listarveiculo']=$e->listarEquipamento($id_cliente);
       }
        
        
        $this->loadView("listarequipamento",$dados);
    
}
}

