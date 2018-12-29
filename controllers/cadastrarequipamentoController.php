<?php

class cadastrarequipamentoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
          $dados=array('erro'=>'','ok'=>'');
        
      
        
        
        $e = new equipamento();
        if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {
            $tipo = trim(addslashes($_POST['tipo']));
            $marca = trim(addslashes($_POST['marca']));
            $id_cliente = trim(addslashes($_POST['id_cliente']));
            $descricao = addslashes($_POST['descricao']);
           


            if($e->cadastrar($tipo, $descricao, $marca, $id_cliente)== TRUE){
                
        }else{
             echo 'nao passou no cadastro';
        }

        $this->loadView("cadastrarequipamento", $dados);
    }

}
}
