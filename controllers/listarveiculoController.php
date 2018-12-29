<?php

class listarveiculoController extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function index (){
        $dados=array();
        
        $v=new veiculo();
      
       if(isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])){
      $id_cliente= trim(addslashes($_POST['id_cliente']));
           $dados['listarveiculo']=$v->listarVeiculo($id_cliente);
       }
        
        
        $this->loadView("listarveiculo",$dados);
    
}
}

