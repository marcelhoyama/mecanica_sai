<?php

class listarequipamentoController extends controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index (){
        $dados=array();
        
        $e=new equipamento();
      
       if(isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])){
     $id_cliente= trim(addslashes($_POST['id_cliente']));
          $dados['listarequipamento']=$e->listarEquipamento($id_cliente);
       }else{
           echo 'Nao fo listar os equipamentos de'.$id_cliente;
       }
        
        
        $this->loadView("listarequipamento",$dados);
    
}
}

