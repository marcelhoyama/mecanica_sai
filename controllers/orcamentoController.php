<?php

class orcamentoController extends controller {
    
    public function index (){
        $dados=array('erro'=>'','ok'=>'');
        
        $c=new cliente();
        $o=new orcamento();
        $dados['listarcliente']=$c->listarCliente();
        
        if(isset($_POST['numero']) && !empty($_POST['numero'])){
            $numero= trim(addslashes($_POST['numero']));
            $status= trim(addslashes($_POST['status']));
            $dataentrada= trim(addslashes($_POST['dataentrada']));
            $datasaida= trim(addslashes($_POST['datasaida']));
            $nome= trim(addslashes($_POST['nome']));
            
           if($c->cadastrar($nome, $cpf, $endereco, $telefone, $telefone2, $email)==true){
          $dados['ok']=$c->cadastrar($nome, $cpf, $endereco, $telefone, $telefone2, $email);
               }else{
                   $dados['erro']="Não foi possivel cadastrar! Verifique os campos estão preenchidos corretamente.";
               }
           
        }
        
        
        $this->loadTemplate("orcamento",$dados);
    }
}

